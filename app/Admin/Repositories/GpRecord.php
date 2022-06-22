<?php

namespace App\Admin\Repositories;

use App\Models\GpRecord as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class GpRecord extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

}
