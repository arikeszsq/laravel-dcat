<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\PayMethodInterface;

class IndexController extends Controller
{
    protected $payMethod;

    public function __construct(PayMethodInterface $payMethod)
    {
        $this->payMethod = $payMethod;
    }

    public function index(PayMethodInterface $payMethod)
    {

        app()->make('App\Repository\Interfaces\PayMethodInterface')->payMoney(50);

        echo '<br>';
        //只有通过   构造方法   进行自动加载依赖的方式才能触发契约的when绑定
        $this->payMethod->payMoney(20);

        echo '<br>';//因为laravel中的上下文绑定只能具体到类，所以这里的$test实例依然为普通绑定

        $payMethod->payMoney(30);
    }
}
