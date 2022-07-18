<?php


namespace App\Repository\Repositories;

use App\Repository\Interfaces\PayMethodInterface;

class AliPay implements PayMethodInterface
{
    public function payMoney($money_amount)
    {
        echo 'alipay'.$money_amount;
        // TODO: Implement payMoney() method.
    }
}
