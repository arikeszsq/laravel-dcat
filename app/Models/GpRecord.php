<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GpRecord extends Model
{

    protected $table = 'gp_record';
    public $timestamps = false;


    public function gpList()
    {
        return $this->hasOne(GpList::class,'id','gp_id');
    }
}
