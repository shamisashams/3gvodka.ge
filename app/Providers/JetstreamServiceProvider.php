<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Modules\Pages\Http\Resources\Client\PageMetaInfoResource;
use App\Modules\Pages\Models\Page;
use App\Modules\Pages\Services\Client\ServiceData;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Laravel\Jetstream\Jetstream;
use PageSeoService;
use Schema;
use Session;
use View;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    function get_url($lang): string
    {

        $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $uriSegments[1] = $lang;


        $uriSegments = implode('/', $uriSegments);
        return $host . $uriSegments;
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        $layoutData = null;
        $allSeoData = null;
        $services = null;
        if(Schema::hasTable('pages_meta')){
            $analyticSeoData = Page::whereName(Page::NAME_SEO)->first();
            $analytics = PageSeoService::getAnalyticData($analyticSeoData ? $analyticSeoData->first()->meta : []);
            $seoData = PageSeoService::setPath(request()->path())->parsePathAndSetLocale()
                ->parsePathAndSetPageType()->getPageData();
            if ($analytics) {
                $allSeoData = array_merge($analytics, $seoData);
            } else {
                $allSeoData = $seoData;
            }

            View::composer('app', function ($view) use($allSeoData){
                $view->with('allSeoData', $allSeoData);
            });

            $pages = Page::whereIn('name', [ Page::NAME_CONTACT,Page::NAME_SOCIAL])->get();
            $services= (new ServiceData())->getServicesStatic(5);

            $layoutData = [];
            foreach($pages as $page) {
                $pageData = (new PageMetaInfoResource($page->meta))->toArray();
                $layoutData[$page->name] =!empty($pageData[0]) ? $pageData[0] : [];
            }


//            urls for language change
            $language_urls = [];
            foreach (config('language_manager.locales') as $lang){
//                $language_urls[$lang] = $this->get_url($lang);
            }
//            dd(app()->getLocale());
        }
        Inertia::share([
            'layoutData'   => $layoutData,
            'seo'   => $allSeoData,
            'locale'            => function () {
                return app()->getLocale();
            },
            'available_locales' => $language_urls,
            'lang'              => function () {
                $file = base_path() . '/lang/'.app()->getLocale().'/client.php';

                if (!file_exists($file)) {
                    return [];
                } else {
                    return include $file;
                }
            },
            'active_route' => 'test',
            'servicesStatic' => $services
        ]);

    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);

    }
}
