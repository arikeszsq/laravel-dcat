<?php

namespace App\Repository\Interfaces;

interface PayMethodInterface
{
    public function payMoney($money_amount);
}
