<?php

rex_extension::register('PACKAGES_INCLUDED', static function ($params) {
    if (rex::isBackend()) {
        rex_extension::register('STRUCTURE_CONTENT_SIDEBAR', ['ffCopyTool', 'addBackendSidebar']);
    }
}, rex_extension::EARLY);

rex_yform_manager_dataset::setModelClass(
    'rex_fc_article',
    fc_article::class
);

rex_yform_manager_dataset::setModelClass(
    'rex_fc_article_slice',
    fc_article_slice::class
);

rex_yform_manager_dataset::setModelClass(
    'rex_fc_media',
    fc_media::class
);

if (!rex::isSafeMode() && rex_plugin::get('yform', 'rest')->isAvailable()) {
    /* YForm Rest API */
    $rex_fc_article_slice_route = new \rex_yform_rest_route(
        [
            'path' => '/copy/fc_article_slice/',
            'auth' => '\rex_yform_rest_auth_token::checkToken',
            'type' => \fc_article_slice::class,
            'query' => \fc_article_slice::query(),
            'post' => [
                'fields' => [
                    'fc_article_slice' => [
                        'fc_id',
                        'article_id',
                        'clang_id',
                        'ctype_id',
                        'module_id',
                        'revision',
                        'priority',
                        'status',
                        'value1',
                        'value2',
                        'value3',
                        'value4',
                        'value5',
                        'value6',
                        'value7',
                        'value8',
                        'value9',
                        'value10',
                        'value11',
                        'value12',
                        'value13',
                        'value14',
                        'value15',
                        'value16',
                        'value17',
                        'value18',
                        'value19',
                        'value20',
                        'media1',
                        'media2',
                        'media3',
                        'media4',
                        'media5',
                        'media6',
                        'media7',
                        'media8',
                        'media9',
                        'media10',
                        'medialist1',
                        'medialist2',
                        'medialist3',
                        'medialist4',
                        'medialist5',
                        'medialist6',
                        'medialist7',
                        'medialist8',
                        'medialist9',
                        'medialist10',
                        'link1',
                        'link2',
                        'link3',
                        'link4',
                        'link5',
                        'link6',
                        'link7',
                        'link8',
                        'link9',
                        'link10',
                        'linklist1',
                        'linklist2',
                        'linklist3',
                        'linklist4',
                        'linklist5',
                        'linklist6',
                        'linklist7',
                        'linklist8',
                        'linklist9',
                        'linklist10',
                        'createdate',
                        'createuser',
                        'updatedate',
                        'updateuser',
                        'aw_grid',
                    ],
                ],
            ],
        ]
    );
    \rex_yform_rest::addRoute($rex_fc_article_slice_route);

    /* YForm Rest API */
    $rex_fc_article_route = new \rex_yform_rest_route(
        [
            'path' => '/copy/fc_article/',
            'auth' => '\rex_yform_rest_auth_token::checkToken',
            'type' => \fc_article::class,
            'query' => \fc_article::query(),
            'post' => [
                'fields' => [
                    'fc_article' => [
                        'fc_pid',
                        'fc_id',
                        'parent_id',
                        'name',
                        'catname',
                        'catpriority',
                        'startarticle',
                        'priority',
                        'path',
                        'status',
                        'template_id',
                        'clang_id',
                        'createdate',
                        'createuser',
                        'updatedate',
                        'updateuser',
                        'revision',
                        'art_score',
                        'art_online_from',
                        'art_online_to',
                        'art_keywords',
                        'art_file',
                        'art_teaser',
                        'art_type_id',
                        'art_html_title',
                        'art_no_search',
                        'cat_navigation_area',
                        'cat_description',
                        'cat_menu_tweaker',
                        'art_menudesc',
                        'asd_category',
                        'asd_picture',
                        'asd_text',
                        'asd_background',
                        'asd_start',
                        'asd_end',
                        'asd_booth',
                        'asd_link',
                        'glob_dateformat',
                        'art_url_title',
                        'art_google_exclude',
                        'cat_noindex',
                        'art_llp_typ',
                        'art_llp_hover',
                        'art_llp_vorschau_uebersicht',
                        'art_llp_titel',
                        'asd_news_link',
                        'asd_news_date',
                        'art_og_image',
                        'asd_geo',
                        'asd_news_external_link',
                        'asd_joblocation',
                        'asd_jobentry',
                        'asd_jobhover',
                        'asd_jobimage',
                        'asd_joblink',
                        'glob_FF_channel',
                        'seo_title',
                        'seo_description',
                        'seo_keywords',
                        'seo_custom_url',
                        'seo_canonical_url',
                        'seo_noindex',
                        'seo_ignore_prefix',
                        'art_head_tracking',
                        'art_googleOptimize',
                        'glob_footer_logos',
                        'glob_gtmid',
                        'glob_googlOptimize',
                        'glob_gua',
                        'art_llp_author',
                        'art_virt_subcat',
                        'cat_banner',
                        'cat_banner_link',
                        'art_llp_subtyp',
                        'yrewrite_url_type',
                        'yrewrite_url',
                        'yrewrite_redirection',
                        'yrewrite_title',
                        'yrewrite_description',
                        'yrewrite_changefreq',
                        'yrewrite_priority',
                        'yrewrite_index',
                        'yrewrite_canonical_url',
                        'art_iframe',
                        'art_description',
                    ],
                ],
            ],
            'get' => [
                'fields' => [
                    'fc_article' => [
                        'id',
                    ],
                ],
            ],
            'delete' => [
                'fields' => [
                    'fc_article' => [
                        'id',
                        'pid',
                    ],
                ],
            ],
        ]
    );
    \rex_yform_rest::addRoute($rex_fc_article_route);

    /* YForm Rest API */
    $rex_fc_media_route = new \rex_yform_rest_route(
        [
            'path' => '/copy/fc_media/',
            'auth' => '\rex_yform_rest_auth_token::checkToken',
            'type' => \fc_media::class,
            'query' => \fc_media::query(),
            'post' => [
                'fields' => [
                    'fc_media' => [
                        'fc_id',
                        'category_id',
                        'attributes',
                        'filetype',
                        'filename',
                        'originalname',
                        'filesize',
                        'width',
                        'height',
                        'title',
                        'createdate',
                        'createuser',
                        'updatedate',
                        'updateuser',
                        'revision',
                        'med_description',
                        'med_copyright',
                        'med_link',
                        'med_thumbnail',
                        'med_internal_link',
                        'med_mediapool_rename',
                        'server'
                    ],
                ],
            ],
        ]
    );
    \rex_yform_rest::addRoute($rex_fc_media_route);
}

if (rex_addon::get('cronjob')->isAvailable()) {
    rex_cronjob_manager::registerType(rex_cronjob_ff_copy::class);
}
