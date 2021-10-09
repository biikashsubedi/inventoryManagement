<?php

namespace App\Services\System;

use App\Models\Language;
use App\Services\Service;
use Illuminate\Http\Request;

class LanguageService extends Service
{

    public function __construct(Language $model)
    {
        parent::__construct($model);
    }


}
