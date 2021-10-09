<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'language_code', 'group'
    ];

    public function isDefault()
    {
        if (in_array($this->language_code, ['en', 'np'])) {
            return true;
        } else {
            return false;
        }
    }
}
