<?php


namespace App\Modules\Landing\Http\Resources\Brand;


use App\Modules\Pages\Models\Blog;
use App\Modules\Pages\Models\Brand;
use SeoData;
use Str;

/**
 * @property Brand item
 */
class BrandItemResource
{

    /**
     * @var Brand
     */
    protected $item;
    protected $products;

    /**
     * BlogItemResource constructor.
     *
     * @param Brand|null $blog
     */
    public function __construct(Brand $brand = null)
    {
        $this->item = $brand;
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
            'show_url'  =>route('brand.show',generateSlug($this->item->id,$this->item->title)),
            'created_at' => $this->getDateFormat(),
        ];
    }

    public function toArrayForShow()
    {
        return [
            'id'    => $this->item->id,
            'title' => $this->item->title,
            'description' => $this->item->description,
            'main_image' => $this->item->getImageByKey('main'),
            'banner_image' => $this->item->getImageByKey('banner'),
            'icon_image' => $this->item->getImageByKey('icon'),
            'products' => $this->item->products()->with("images")->paginate(12),
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
