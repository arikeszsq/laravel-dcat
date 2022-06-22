<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GpList extends Model
{

    protected $table = 'gp_lists';


    public static function getNameList()
    {
        $lists = GpList::query()->get();
        $data = [];
        foreach ($lists as $gp)
        {
            $data[$gp->name]=$gp->name;
        }
        return $data;
    }
}
