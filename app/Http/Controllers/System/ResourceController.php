<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    protected $moduleId;

    public function __construct($service)
    {
        $this->service = $service;
    }
}
