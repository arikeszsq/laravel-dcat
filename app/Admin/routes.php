<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->get('/test','TestController@index');


    $router->resource('news', 'ZNewsController');
    $router->resource('deal-log', 'GpDealLogController');
    $router->resource('pro', 'GpPrognosiController');
    $router->resource('record', 'GpRecordController');
    $router->resource('record-lists', 'GpListController');
});
