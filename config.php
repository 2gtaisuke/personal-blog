<?php

return [
    'production' => false,
    'baseUrl' => '/',
    'personal_website' => 'https://tsujitaisuke.net/',
    'blog_title' => '辻 大介のblog',
    'contact_url' => 'mail@tsujitaisuke.net',
    'format_date' => function($page, $date) {
        return date('Y/m/d', $date);
    },
    'collections' => [
        'articles' => [
            'path' => '{filename}',
            'sort' => '-date'
        ]
    ],
];