<?php
/**
 *  app/Modules/Pages/Services/Client/BlogData.php
 *
 * Date-Time: 05.08.21
 * Time: 15:45
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */

namespace App\Modules\Pages\Services\Client;

use App\Modules\Landing\Http\Resources\Blog\BlogItemResource;
use App\Modules\Landing\Http\Resources\Brand\BrandItemResource;
use App\Modules\Pages\Models\Blog;
use App\Modules\Pages\Models\Brand;

class BrandData
{
    /**
     * @var Blog
     */
    protected Brand $blogs;

    /**
     * BlogData constructor.
     */
    public function __construct()
    {
        $this->brands = new Brand();
    }


    /**
     * @return array
     */
    public function getBrands(): array
    {
        $brands = $this->brands::with(['translations', 'images'])
            ->active()->orderBy('created_at', 'DESC')->get();

        $brandsData = [];
        foreach ($brands->getIterator() as $brand) {
            $brandsData[] = (new BrandItemResource($brand))->toListItem();
        }
        return $brandsData;
    }
}
