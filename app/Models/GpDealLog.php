<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GpDealLog extends Model
{

    protected $table = 'gp_deal_log';

    public function gpList()
    {
        return $this->hasOne(GpList::class, 'id', 'gp_id');
    }

    const DealType = [
        1 => '买',
        2 => '卖'
    ];

}
