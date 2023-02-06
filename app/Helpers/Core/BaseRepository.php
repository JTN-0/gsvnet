<?php

namespace App\Helpers\Core;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function save(Model $model)
    {
        $model->save();
    }
}