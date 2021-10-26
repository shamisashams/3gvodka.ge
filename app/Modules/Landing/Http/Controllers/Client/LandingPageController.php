<?php

namespace App\Modules\Landing\Http\Controllers\Client;

use App\Modules\Landing\Http\Requests\ContactSendRequest;
use App\Modules\Landing\Http\Resources\Blog\BlogItemResource;
use App\Modules\Landing\Http\Resources\Brand\BrandItemResource;
use App\Modules\Landing\Http\Resources\Product\ProductItemResource;
use App\Modules\Landing\Http\Resources\Project\ProjectItemResource;
use App\Modules\Landing\Http\Resources\Service\ServiceItemResource;
use App\Modules\Landing\Http\Resources\Team\TeamItemResource;
use App\Modules\Landing\Mail\ContactSend;
use App\Modules\Pages\Http\Resources\Client\PageMetaInfoResource;
use App\Modules\Pages\Models\Blog;
use App\Modules\Pages\Models\Brand;
use App\Modules\Pages\Models\Page;
use App\Modules\Pages\Models\Product;
use App\Modules\Pages\Models\Project;
use App\Modules\Pages\Models\Service;
use App\Modules\Pages\Models\Team;
use App\Modules\Pages\Services\Client\BlogData;
use App\Modules\Pages\Services\Client\BrandData;
use App\Modules\Pages\Services\Client\ProjectData;
use App\Modules\Pages\Services\Client\ServiceData;
use App\Modules\Pages\Services\Client\TeamData;
use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use Laravel\Jetstream\Jetstream;
use SeoData;
use View;

/**
 * @property MetaInterface meta
 */
class LandingPageController extends Controller
{

    /**
     * @var MetaInterface
     */
    protected $meta;

    protected array $directionArray = [];

    /**
     * LandingPageController constructor.
     *
     * @param MetaInterface $meta
     */
    public function __construct(MetaInterface $meta)
    {
        $this->meta = $meta;
    }


    public function home(Request $request)
    {
        return view("homePage");
    }
    public function product(Request $request):Response
    {

        $page = Page::where('name', 'product')->first();
        $pageData = $page ? (new PageMetaInfoResource($page->meta))->toArray($request) : [];


        $brands = (new BrandData())->getBrands();


        $allSeoData = SeoData::setTitle(__('seo.products.title'))
            ->setDescription(__('seo.products.description'))
            ->setKeywords(__('seo.products.description'))
            ->setOgTitle(__('seo.products.title'))
            ->setOgDescription(__('seo.products.description'))
            ->getSeoData();


        View::composer('app', function ($view) use ($allSeoData) {
            $view->with('allSeoData', $allSeoData);
        });

        return Jetstream::inertia()->render($request, 'Landing/Product/Index', [
            'page' => $pageData,
            'active_route' => Route::currentRouteName(),
            'brands' => $brands
        ]);
    }

    public function brandView(Request $request, $slug) {
        $brand = Brand::with([
            'translations',
            'images',
        ])->with(['products' => function($query){
            $query->with("images")->where('status', 1);
        }])
            ->active()
            ->where('id', getIdFromSlug($slug))->firstOrFail();

        $allSeoData = (new BrandItemResource($brand))->toSeoData();
        View::composer('app', function ($view) use ($allSeoData) {
            $view->with('allSeoData', $allSeoData);
        });

        $page = Page::where('name', 'brand')->first();
        $pageData = $page ? (new PageMetaInfoResource($page->meta))->toArray($request) : [];

//        dd((new BrandItemResource($brand))->toArrayForShow(),);

        return Jetstream::inertia()->render($request, 'Landing/Brand/Index', [
            'brand' => (new BrandItemResource($brand))->toArrayForShow(),
//            'brand' => $brand,
            'seo' => $allSeoData,
            'page' => $pageData
        ]);
    }


    public function productView(Request $request, $slug)
    {

        $product = Product::with([
            'translations',
            'images'
        ])
            ->active()
            ->where('id', getIdFromSlug($slug))->firstOrFail();

        $allSeoData = (new ProductItemResource($product))->toSeoData();
        View::composer('app', function ($view) use ($allSeoData) {
            $view->with('allSeoData', $allSeoData);
        });

        $page = Page::where('name', 'product')->first();
        $pageData = $page ? (new PageMetaInfoResource($page->meta))->toArray($request) : [];

//        dd((new ProductItemResource($product))->toArrayForShow());
        return Jetstream::inertia()->render($request, 'Landing/Product/Show', [
            'product' => array((new ProductItemResource($product))->toArrayForShow()),
            'seo' => $allSeoData,
            'page' => $pageData,
            'goBack' => \route('product.index')
        ]);
    }


    /**
     * @param Request $request
     *
     * @return \Inertia\Response
     */
    public function about(Request $request): Response
    {
        $page = Page::where('name', 'about')->first();
        $pageData = $page ? (new PageMetaInfoResource($page->meta))->toArray($request) : [];

        $allSeoData = SeoData::setTitle(__('seo.about.title'))
            ->setDescription(__('seo.about.description'))
            ->setKeywords(__('seo.about.description'))
            ->setOgTitle(__('seo.about.title'))
            ->setOgDescription(__('seo.about.description'))
            ->getSeoData();

        View::composer('app', function ($view) use ($allSeoData) {
            $view->with('allSeoData', $allSeoData);
        });

        return Jetstream::inertia()->render($request, 'Landing/About/Index',[
            'page' => $pageData
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Inertia\Response
     */
 /**
     * @param Request $request
     *
     * @return \Inertia\Response
     */
    public function contact(Request $request): Response
    {
        $allSeoData = SeoData::setTitle(__('seo.contact.title'))
            ->setDescription(__('seo.contact.description'))
            ->setKeywords(__('seo.contact.description'))
            ->setOgTitle(__('seo.contact.title'))
            ->setOgDescription(__('seo.contact.description'))
            ->getSeoData();

        View::composer('app', function ($view) use ($allSeoData) {
            $view->with('allSeoData', $allSeoData);
        });

        return Jetstream::inertia()->render($request, 'Landing/Contact/Index');
    }

    public function news(Request $request): Response
    {
        $page = Page::where('name', 'blog')->first();
//        dd($page);
        $pageData = $page ? (new PageMetaInfoResource($page->meta))->toArray($request) : [];

        $news = (new BlogData())->getBlogs();
//        dd($news);


        $allSeoData = SeoData::setTitle(__('seo.news.title'))
            ->setDescription(__('seo.news.description'))
            ->setKeywords(__('seo.news.description'))
            ->setOgTitle(__('seo.news.title'))
            ->setOgDescription(__('seo.news.description'))
            ->getSeoData();

        View::composer('app', function ($view) use ($allSeoData) {
            $view->with('allSeoData', $allSeoData);
        });

        return Jetstream::inertia()->render($request, 'Landing/News/Index', [
            'page' => $pageData,
            'active_route' => Route::currentRouteName(),
            'news' => $news
        ]);
    }

    public function newsView(Request $request, $slug)
    {
        $news = Blog::with([
            'translations',
            'images'
        ])
            ->active()
            ->where('id', getIdFromSlug($slug))->firstOrFail();

        $allSeoData = (new BlogItemResource($news))->toSeoData();
        View::composer('app', function ($view) use ($allSeoData) {
            $view->with('allSeoData', $allSeoData);
        });

        $page = Page::where('name', 'blog')->first();
        $pageData = $page ? (new PageMetaInfoResource($page->meta))->toArray($request) : [];
//        dd($news["relations"]);
//        dd((new ProductItemResource($product))->toArrayForShow());
        return Jetstream::inertia()->render($request, 'Landing/News/Show', [
            'news' => array((new BlogItemResource($news))->toArrayForShow()),
            'seo' => $allSeoData,
            'page' => $pageData,
            'goBack' => \route('news.index')
        ]);
    }

    public function mail(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'name' => 'required|string|max:55',
                'email' => 'required|email',
                'message' => 'required|max:1024'
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => 'subject',
                'message' => $request->message
            ];
//            dd($data);
//            $mailTo = Setting::where(['key' => 'email'])->first();
            $mailTo = "vakhobatsikadze@gmail.com";
//            if (($mailTo !== null) && $mailTo->value) {
                Mail::to($mailTo)->send(new ContactSend($data));
//            }
//
        }
//        return redirect()->route("client.contact.index");
    }
}
