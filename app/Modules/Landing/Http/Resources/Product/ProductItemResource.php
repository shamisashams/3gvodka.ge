<?php


namespace App\Modules\Landing\Http\Resources\Product;


use App\Modules\Pages\Models\Blog;
use App\Modules\Pages\Models\Brand;
use App\Modules\Pages\Models\Product;
use SeoData;
use Str;

/**
 * @property Product item
 */
class ProductItemResource
{

    /**
     * @var Product
     */
    protected $item;

    /**
     * BlogItemResource constructor.
     *
     * @param Brand|null $product
     */
    public function __construct(Product $product = null)
    {
        $this->item = $product;
    }

    /**
     * @return array
     */
    public function toListItem(): array
    {
        return [
            'id'    => $this->item->id,
            'title' => $this->item->title,
            'description' => $this->item->short_description,
            'main_image' => $this->item->getImageByKey('main'),
            'banner_image' => $this->item->getImageByKey('banner'),
            'icon_image' => $this->item->getImageByKey('icon'),
            'show_url'  =>route('product.show',generateSlug($this->item->id,$this->item->title)),
            'created_at' => $this->getDateFormat(),
        ];
    }

    /**
     * @return array
     */
    public function toArrayForShow()
    {
        return [
            'id'    => $this->item->id,
            'title' => $this->item->title,
            'description' => $this->item->description,
            'short_description' => $this->item->short_description,
            'main_image' => $this->item->getImageByKey('profile'),
            'manufacturer' => $this->item->manufacturer,
            'country' => $this->item->country,
            'show_url'  =>route('product.show',''),
            'created_at' => $this->getDateFormat(),
        ];
    }

    /**
     * @return string
     */
    private function getDateFormat()
    {
        if (!$this->item->date) {
            return '';
        }
        return $this->item->date->format('Y') . ' '  . __('date.month.' . $this->item->date->format('M')) . ' ' . $this->item->date->format('d');
    }

    /**
     * @return array
     */
    public function toSeoData()
    {
        $item = $this->item;
        $description = $this->item->seo_meta['description'] ?? $this->item->description;
        $title = $this->item->seo_meta['title'] ?? $this->item->title;
        $keyword = $this->item->seo_meta['keyword'] ?? $this->item->description;
        return SeoData::setTitle($title)
            ->setDescription($description)
            ->setKeywords($keyword)
            ->setOgTitle($title)
            ->setOgDescription($description)
            ->setOgImage($this->item->getImageByKey('profile'))->getSeoData();
    }

    /**
     * @return array
     */
    public function toListSeoData(): array
    {
        return SeoData::setTitle(__('seo.blog.title'))
            ->setDescription( __('seo.blog.description'))
            ->setKeywords( __('seo.blog.description'))
            ->setOgTitle( __('seo.blog.title'))
            ->setOgDescription( __('seo.blog.description'))
            ->getSeoData();
    }

}
