<?php

namespace App\Services;

class Service
{

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

}
