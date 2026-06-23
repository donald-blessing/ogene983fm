<?php

declare(strict_types=1);

/**
 * @see https://github.com/artesaos/seotools
 */
return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults' => [
            'title' => 'Ogene 98.3 FM', // set false to total remove
            'titleBefore' => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description' => 'Authentically Eastern Radio. The voice of the people, bringing you the best in highlife, news, and culture.', // set false to total remove
            'separator' => ' - ',
            'keywords' => ['radio', 'ogene', '98.3fm', 'eastern nigeria', 'highlife', 'news'],
            'canonical' => null, // Set null for using Url::current(), set false to total remove
            'robots' => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title' => 'Ogene 98.3 FM', // set false to total remove
            'description' => 'Authentically Eastern Radio. The voice of the people.', // set false to total remove
            'url' => null, // Set null for using Url::current(), set false to total remove
            'type' => 'website',
            'site_name' => 'Ogene 98.3 FM',
            'images' => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            // 'card'        => 'summary',
            // 'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title' => 'Ogene 98.3 FM', // set false to total remove
            'description' => 'Authentically Eastern Radio. The voice of the people.', // set false to total remove
            'url' => null, // Set null for using Url::current(), set false to total remove
            'type' => 'WebPage',
            'images' => [],
        ],
    ],
];
