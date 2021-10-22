<?php

return [
    'modules' => [
        'home' => [
            'slider' => [
                'activeLocaleKey' => 'en',
                'key' => 'slider',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'images' => [],
                        'label' => 'multi_fields',
                        'name' => 'fields',
                        'type' => 'multi_fields',
                        'is_translation' => false,
                        'is_required' => false,
                        'additional_fields' => [
                            [
                                'label' => 'image',
                                'name' => 'image',
                                'type' => 'image',
                                'is_translation' => false,
                                'is_required' => false,
                                'file' => []
                            ],
                        ]
                    ]
                ]
            ],
            'galleries' => [
                'activeLocaleKey' => 'en',
                'key' => 'galleries',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'images' => [],
                        'label' => 'multi_fields',
                        'name' => 'fields',
                        'type' => 'multi_fields',
                        'is_translation' => false,
                        'is_required' => false,
                        'additional_fields' => [
                            [
                                'label' => 'title',
                                'name' => 'title',
                                'type' => 'text',
                                'is_translation' => true,
                                'is_required' => false,
                            ],
                            [
                                'label' => 'link_url',
                                'name' => 'link_url',
                                'type' => 'text',
                                'is_translation' => false,
                                'is_required' => false,
                            ],
                            [
                                'label' => 'image',
                                'name' => 'image',
                                'type' => 'image',
                                'is_translation' => false,
                                'is_required' => false,
                                'file' => []
                            ],
                        ]
                    ]
                ]
            ]
        ],
        'project' => [
            'hero' => [
                'activeLocaleKey' => 'en',
                'key' => 'hero',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'background_title',
                        'name' => 'background_title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'banner_image',
                        'name' => 'banner_image',
                        'type' => 'image',
                        'is_translation' => false,
                        'is_required' => false,
                        'image' => []
                    ],
                ]
            ],
        ],
        'mail' => [
            'mail' => [
                'activeLocaleKey' => 'ka',
                'key' => 'mail',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'email',
                        'name' => 'email',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                    [
                        'label' => 'subject',
                        'name' => 'subject',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ]
                ]
            ],
        ],
        'product' => [
            'slider' => [
                'activeLocaleKey' => 'en',
                'key' => 'slider',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'images' => [],
                        'label' => 'multi_fields',
                        'name' => 'fields',
                        'type' => 'multi_fields',
                        'is_translation' => false,
                        'is_required' => false,
                        'additional_fields' => [
                            [
                                'label' => 'image',
                                'name' => 'image',
                                'type' => 'image',
                                'is_translation' => false,
                                'is_required' => false,
                                'file' => []
                            ],
                        ]
                    ]
                ]
            ],
            'brands' => [
                'activeLocaleKey' => 'en',
                'key' => 'brands',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ]
                ]
            ]
        ],
        'blog' => [
            'blog' => [
                'activeLocaleKey' => 'en',
                'key' => 'hero',
                'label' => '',
                'status' => 1,
                'inputs' => [

                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ]
                ]
            ],
        ],
        'team' => [
            'hero' => [
                'activeLocaleKey' => 'en',
                'key' => 'hero',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'background_title',
                        'name' => 'background_title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'banner_image',
                        'name' => 'banner_image',
                        'type' => 'image',
                        'is_translation' => false,
                        'is_required' => false,
                        'image' => []
                    ],
                ]
            ],
        ],
        'service' => [
            'hero' => [
                'activeLocaleKey' => 'en',
                'key' => 'hero',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'background_title',
                        'name' => 'background_title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                        'locale' => []
                    ],
                    [
                        'label' => 'banner_image',
                        'name' => 'banner_image',
                        'type' => 'image',
                        'is_translation' => false,
                        'is_required' => false,
                        'image' => []
                    ],
                ]
            ],
        ],
        'about' => [
            'slider' => [
                'activeLocaleKey' => 'en',
                'key' => 'slider',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'title',
                        'name' => 'title',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'label' => 'description',
                        'name' => 'description',
                        'type' => 'wysiwig',
                        'is_translation' => true,
                        'is_required' => false,
                    ],
                    [
                        'images' => [],
                        'label' => 'multi_fields',
                        'name' => 'fields',
                        'type' => 'multi_fields',
                        'is_translation' => false,
                        'is_required' => false,
                        'additional_fields' => [
                            [
                                'label' => 'image',
                                'name' => 'image',
                                'type' => 'image',
                                'is_translation' => false,
                                'is_required' => false,
                                'file' => []
                            ],
                        ]
                    ]
                ]
            ]
        ],
        'contact' => [
            'contact' => [
                'activeLocaleKey' => 'ka',
                'key' => 'contact',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'phone',
                        'name' => 'phone',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                    [
                        'label' => 'email',
                        'name' => 'email',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                    [
                        'label' => 'address',
                        'name' => 'address',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false
                    ],
                    [
                        'label' => 'working',
                        'name' => 'working',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false
                    ],
                    [
                        'label' => 'map_iframe',
                        'name' => 'map_iframe',
                        'type' => 'textarea',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                ]
            ],
        ],
        'social' => [
            'social' => [
                'activeLocaleKey' => 'ka',
                'key' => 'social',
                'label' => '',
                'status' => 1,
                'inputs' => [
                    [
                        'label' => 'facebook',
                        'name' => 'facebook',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                    [
                        'label' => 'twitter',
                        'name' => 'twitter',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                    [
                        'label' => 'linkedin',
                        'name' => 'linkedin',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                    [
                        'label' => 'youtube',
                        'name' => 'youtube',
                        'type' => 'text',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                ]
            ],
        ],
        'seo' => [
            'default' => [
                'activeLocaleKey' => 'ka',
                'key' => 'default',
                'status' => 1,
                'label' => '',
                'inputs' => [
                    [
                        'label' => 'seo_title',
                        'name' => 'seo_title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false
                    ],
                    [
                        'label' => 'seo_description',
                        'name' => 'seo_description',
                        'type' => 'textarea',
                        'is_translation' => true,
                        'is_required' => false
                    ],
                    [
                        'label' => 'seo_og_title',
                        'name' => 'seo_og_title',
                        'type' => 'text',
                        'is_translation' => true,
                        'is_required' => false
                    ],
                    [
                        'label' => 'seo_og_description',
                        'name' => 'seo_og_description',
                        'type' => 'textarea',
                        'is_translation' => true,
                        'is_required' => false
                    ],
                    [
                        'label' => 'seo_keywords',
                        'name' => 'seo_keywords',
                        'type' => 'textarea',
                        'is_translation' => true,
                        'is_required' => false
                    ],
                    [
                        'label' => 'seo_og_image',
                        'name' => 'seo_og_image',
                        'type' => 'image',
                        'is_translation' => false,
                        'is_required' => false,
                        'image' => []
                    ],
                ]
            ],
            'analytic' => [
                'activeLocaleKey' => 'ka',
                'key' => 'analytic',
                'status' => 1,
                'label' => '',
                'inputs' => [
                    [
                        'label' => 'analytic_scripts',
                        'name' => 'analytic_scripts',
                        'type' => 'textarea',
                        'is_translation' => false,
                        'is_required' => false
                    ],
                    [
                        'label' => 'analytic_no_scripts',
                        'name' => 'analytic_no_scripts',
                        'type' => 'textarea',
                        'is_translation' => false,
                        'is_required' => false
                    ]
                ]
            ],
        ],
    ]
];
