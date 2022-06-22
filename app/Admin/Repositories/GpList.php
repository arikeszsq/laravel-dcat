<?php

namespace App\Admin\Repositories;

use App\Models\GpList as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class GpList extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
