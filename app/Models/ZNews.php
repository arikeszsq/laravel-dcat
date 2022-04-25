<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ZNews extends Model
{
	
    use SoftDeletes;

    protected $table = 'z_news';
    
}
