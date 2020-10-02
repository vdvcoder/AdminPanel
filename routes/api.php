<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Product Categories
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Product Tags
    Route::apiResource('product-tags', 'ProductTagApiController');

    // Products
    Route::post('products/media', 'ProductApiController@storeMedia')->name('products.storeMedia');
    Route::apiResource('products', 'ProductApiController');

    // Content Categories
    Route::apiResource('content-categories', 'ContentCategoryApiController');

    // Content Tags
    Route::apiResource('content-tags', 'ContentTagApiController');

    // Content Pages
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Faq Categories
    Route::apiResource('faq-categories', 'FaqCategoryApiController');

    // Faq Questions
    Route::apiResource('faq-questions', 'FaqQuestionApiController');

    // News
    Route::post('news/media', 'NewsApiController@storeMedia')->name('news.storeMedia');
    Route::apiResource('news', 'NewsApiController');

    // Banners
    Route::post('banners/media', 'BannersApiController@storeMedia')->name('banners.storeMedia');
    Route::apiResource('banners', 'BannersApiController');

    // Testimonials
    Route::apiResource('testimonials', 'TestimonialsApiController');

    // Orders
    Route::apiResource('orders', 'OrdersApiController');

    // Coupon Codes
    Route::apiResource('coupon-codes', 'CouponCodesApiController');

    // Brands
    Route::post('brands/media', 'BrandsApiController@storeMedia')->name('brands.storeMedia');
    Route::apiResource('brands', 'BrandsApiController');

    // Customers
    Route::apiResource('customers', 'CustomerApiController');

    // Events
    Route::apiResource('events', 'EventsApiController');

    // Sub Categories
    Route::apiResource('sub-categories', 'SubCategoriesApiController');

    // Product Sub Categories
    Route::apiResource('product-sub-categories', 'ProductSubCategoriesApiController');

    // Newsletter Subscriptions
    Route::apiResource('newsletter-subscriptions', 'NewsletterSubscriptionsApiController');
});
