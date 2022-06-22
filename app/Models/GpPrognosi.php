<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GpPrognosi extends Model
{

    protected $table = 'gp_prognosis';

    public function gpList()
    {
        return $this->hasOne(GpList::class,'id','gp_id');
    }
}
