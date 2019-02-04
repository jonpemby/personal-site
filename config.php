<?php

return [
    'production' => false,
    'baseUrl' => '',
    'site_title' => 'Jonathon Pemberton | Web Developer',
    'site_email' => 'jonpemby@icloud.com',
    'site_author' => 'Jonathon Pemberton',
    'site_job_title' => 'Web Developer',
    'collections' => [
        'posts' => [
            'sort' => ['-date', 'title'],

            'getTags' => function ($post) {
                return collect(explode(',', $post->tags));
            },

            'postedAt' => function ($post) {
                return \Carbon\Carbon::createFromTimestamp($post->date)->format('M d, Y');
            },
        ],
    ],
];
