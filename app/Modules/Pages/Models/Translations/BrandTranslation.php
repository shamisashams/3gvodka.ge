<?php

namespace App\Modules\Pages\Models\Translations;

use App\Modules\Admin\Models\BaseTranslationModel;
use Illuminate\Database\Eloquent\Model;


class BrandTranslation extends BaseTranslationModel
{
    protected $fillable = [
        'title',
        'description',
        'seo_meta'
    ];


    /**
     * @var string[]
     */
    protected $casts = [
        'seo_meta' => 'json',
    ];
}
