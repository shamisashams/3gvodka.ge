<?php

namespace App\Modules\Pages\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\BaseController;
use App\Modules\Pages\Helpers\BlogHelper;
use App\Modules\Pages\Helpers\BrandHelper;
use App\Modules\Pages\Helpers\ProductHelper;
use App\Modules\Pages\Http\Requests\Admin\Blog\BlogStoreRequest;
use App\Modules\Pages\Http\Requests\Admin\Brand\BrandStoreRequest;
use App\Modules\Pages\Http\Requests\Admin\Product\ProductStoreRequest;
use App\Modules\Pages\Models\Blog;
use App\Modules\Pages\Models\Brand;
use App\Modules\Pages\Models\Product;
use App\Modules\Pages\Models\Translations\BlogTranslation;
use App\Modules\Pages\Models\Translations\BrandTranslation;
use App\Modules\Pages\Models\Translations\ProductTranslation;
use App\Modules\Pages\Services\Admin\BlogStoreData;
use App\Modules\Pages\Services\Admin\BrandStoreData;
use App\Modules\Pages\Services\Admin\ProductStoreData;
use App\Utilities\ServiceResponse;
use Carbon\Carbon;
use GetImageWithType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Log;
use TranslationFieldsWithLocale;

class ProductController extends BaseController
{

    protected string $baseModuleName = 'pages::';

    /**
     * @var string
     */
    public $moduleTitle = 'product';

    /**
     * @var string
     */
    public $viewFolderName = 'product';

    /**
     * AuthorController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->successCreateText = $this->moduleTitle . $this->successCreateText;
        $this->successUpdateText = $this->moduleTitle . $this->successUpdateText;
        $this->successDeleteText = $this->moduleTitle . $this->successDeleteText;
        $this->baseData['moduleKey'] = 'product';
        $this->baseData['baseRouteName'] = $this->baseData['baseRouteName'] . '.' . $this->baseData['moduleKey'] . '.';
        $this->baseData['trans_text'] = ProductHelper::getLang();
    }


    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
//        return 1;
        $this->baseData['allData'] = Product::orderBy('created_at', 'desc')->paginate(25);
//        return $this->baseData;
//        return  $this->baseData['allData'];
        return view($this->baseModuleName . $this->baseAdminViewName . $this->viewFolderName . '.index', $this->baseData);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        try {
            $this->baseData['routes']['create_form_data'] = ProductHelper::getRoutes()['create_data'];
            $this->baseData['brands'] = Brand::where("status", 1)->get();

        } catch (\Exception $ex) {
            return view($this->baseModuleName . $this->baseAdminViewName . $this->viewFolderName . '.create', ServiceResponse::error($ex->getMessage()));
        }

        return view($this->baseModuleName . $this->baseAdminViewName . $this->viewFolderName . '.create', ServiceResponse::success($this->baseData));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function createData(Request $request)
    {
        try {
            $this->baseData['routes'] = ProductHelper::getRoutes();
            $this->baseData['routes']['upload_image'] = route(config('cms.admin.base_route_name') . '.image.upload');
//            $this->baseData['options']['galleries_attributes'] = config('blog.galleries_attributes');


            if ($request->get('id')) {
                $item = Product::findOrFail($request->get('id'))->load(['translations']);
                $locales = TranslationFieldsWithLocale::setTranslations($item->translations)->setTranslationFields((new ProductTranslation())->getFillable())
                    ->generateFieldsWithLocales()->getFieldsWithLocales();
                $images = GetImageWithType::setImages($item->images->toArray() ?: [])->generateWithType()->getImagesWithType();
//                dd($images);
                $this->baseData['item']['main'] = $locales;
                $this->baseData['item']['main'] = array_merge($this->baseData['item']['main'], $item->only($item->getFillable()));
//                $this->baseData['item']['main']['date'] = $this->baseData['item']['main']['date'] ? Carbon::parse($this->baseData['item']['main']['date'])->format('Y/m/d') : '';
                $this->baseData['item']['main']['images'] = $images;
                foreach ($locales as $key => $locale) {
                    $this->baseData['item']['seo_meta'][$key] = $locale['seo_meta'] ?? [
                            'title' => '',
                            'description' => '',
                            'keyword' => ''
                        ];
                }

                $this->baseData['item']['galleries'] = $item->galleries_meta;
            }
        } catch (\Exception $ex) {
            Log::error('Error during roles index page', ['error' => $ex, 'message' => $ex->getMessage(), 'data' => $request->all()]);
            return ServiceResponse::jsonNotification($ex->getMessage(), $ex->getCode(), []);
        }

        return ServiceResponse::jsonNotification(__('Filter role successfully'), 200, $this->baseData);
    }

    /**
     * @param BlogStoreRequest $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
//        dd($request);
        try {
            (new ProductStoreData())
                ->setEntityById($request->get('id'))
                ->setInfoData($request->get('main'))
                ->setSeoData($request->get('seo_meta'))
//                ->setGalleriesData($request->get('galleries'))
                ->store()->saveImages()->getEntity();
        } catch (\Exception $ex) {
            return ServiceResponse::jsonNotification($ex->getMessage(), $ex->getCode(), []);
        }

        return ServiceResponse::jsonNotification($this->baseData['trans_text']['save_successfully'], 200, $this->baseData);
    }

    /**
     * @param string $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id = '')
    {
        try {
            $this->baseData['routes']['create_form_data'] = ProductHelper::getRoutes()['create_data'];
            $this->baseData['brands'] = Brand::where("status", 1)->get();
            $this->baseData['id'] = $id;
        } catch (\Exception $ex) {
            return view($this->baseModuleName . $this->baseAdminViewName . $this->viewFolderName . '.edit', ServiceResponse::error($ex->getMessage()));
        }

        return view($this->baseModuleName . $this->baseAdminViewName . $this->viewFolderName . '.edit', ServiceResponse::success($this->baseData));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy(Request $request)
    {
        try {
            Product::findOrFail($request->get('id'))->delete();
        } catch (\Exception $ex) {
            return ServiceResponse::jsonNotification($ex->getMessage(), $ex->getCode(), []);
        }

        return ServiceResponse::jsonNotification($this->baseData['trans_text']['delete_successfully'], 200, $this->baseData);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function updateStatus(Request $request)
    {
        try {
            Product::findOrFail($request->get('id'))->update(['status' => $request->get('status')]);
        } catch (\Exception $ex) {
            return ServiceResponse::jsonNotification($ex->getMessage(), $ex->getCode(), []);
        }

        return ServiceResponse::jsonNotification($this->baseData['trans_text']['update_status_successfully'], 200, $this->baseData);
    }

}
