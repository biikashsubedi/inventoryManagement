<?php

namespace Database\Seeders;


use App\Models\Language;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LanguageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $englishBackend = Language::where('id', 1)->first();
        if (!$englishBackend) {
            Language::create([
                "id" => 1,
                "name" => "English",
                "language_code" => 'en',
                "group" => 'backend'
            ]);
        }
        $japaneseBackend = Language::where('id', 2)->first();
        if (!$japaneseBackend) {
            Language::create([
                "id" => 3,
                "name" => "nepalese",
                "language_code" => 'np',
                "group" => 'backend'
            ]);
        }
    }
}
