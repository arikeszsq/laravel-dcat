<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PayMethodServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        //
        $this->app->bind('App\Repository\Interfaces\PayMethodInterface', 'App\Repository\Repositories\AliPay');

        //重点在于when方法确定运行环境，也就是执行上下文，needs为make所需的abstract类名或别名，give所传入的参数则是实际调用的实现类了
        $this->app->when('App\Http\Controllers\IndexController')
            ->needs('App\Repository\Interfaces\PayMethodInterface')
            ->give('App\Repository\Repositories\WechatPay');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
