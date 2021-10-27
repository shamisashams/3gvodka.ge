<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        $language_urls = [];
        $language_titles = [];
        $current_locale = [];
        foreach (config('language_manager.locales') as $lang){
            $language_urls[$lang] = get_url($lang);
        }
        $language_titles =(config('language_manager.locale_titles'));
        $current_locale = $language_titles[app()->getLocale()];
        unset($language_titles[app()->getLocale()]);
        unset($language_urls[app()->getLocale()]);

        $available_locales = array_combine($language_titles, $language_urls);

        return array_merge(parent::share($request), [
            "available_locales"=>$available_locales,
            'current_locale' =>$current_locale,

        ]);
    }

    /**
     * Sets the root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @param Request $request
     * @return string
     */
    public function rootView(Request $request)
    {
//        if (request()->is(config('cms.front.portal_prefix').'/*')) {
            return $this->rootView;
//        }
        return 'layouts.guest';
    }

}
