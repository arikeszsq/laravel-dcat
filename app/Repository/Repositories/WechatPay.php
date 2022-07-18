<?php


namespace App\Repository\Repositories;


use App\Repository\Interfaces\PayMethodInterface;

class WechatPay implements PayMethodInterface
{
    public function payMoney($money_amount)
    {
        echo 'wechtPay'.$money_amount;
        // TODO: Implement payMoney() method.
    }
}
