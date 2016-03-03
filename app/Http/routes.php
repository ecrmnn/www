<?php

Route::get(
    '/',
    [
        'as' => 'home.index',
        'uses' => 'HomeController@index'
    ]
);

Route::group(['prefix' => 'linkdeck'], function () {
    Route::get(
        '/',
        [
            'as' => 'linkDeck.index',
            'uses' => 'LinkDeckController@index'
        ]
    );

    Route::get(
        'download',
        [
            'as' => 'linkDeck.download',
            'uses' => 'LinkDeckController@download'
        ]
    );
});

Route::group(['prefix' => 'blog'], function () {
    Route::get(
        '/',
        [
            'as' => 'blog.index',
            'uses' => 'ArticleController@index'
        ]
    );

    Route::get(
        '{slug}',
        [
            'as' => 'article.show',
            'uses' => 'ArticleController@show'
        ]
    );
});

Route::get(
    'sitemap.xml',
    [
        'as' => 'sitemap.xml',
        'uses' => 'SitemapController@xml'
    ]
);
