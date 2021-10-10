<?php

use App\Models\Language;
use Illuminate\Support\Facades\Cookie;
use Spatie\TranslationLoader\LanguageLine;
use Stichoza\GoogleTranslate\GoogleTranslate;


function translate($content, $data = [], $group = "backend")
{
    try {

        $key = strtolower(trim(str_replace(".", "", $content)));

        $translations = array_keys(LanguageLine::getTranslationsForGroup(Cookie::get('lang') ?? 'en', $group));

        if ($key !== "") {
            if (!in_array($key, $translations)) {
                $check = LanguageLine::where('key', $key)->where('group', $group)->exists();
                if ($check) {
                    return trans($group . '.' . $key, $data);
                } else {
                    if ($key !== "") {
                        LanguageLine::create([
                            'group' => $group,
                            'key' => $key,
                            'text' => insertText($content, $group),
                        ]);
                        return $content;
                    }
                }
            } else {
                $trans = trans($group . '.' . $key, $data);
                if ($trans == $group . "." . $key) {
                    return $content;
                } else {
                    return $trans;
                }
            }
        } else {
            return $key;
        }
    } catch (\Exception $e) {
        \Log::error('error while translating ' . $e);
    }
}

function insertText($content, $group)
{
    $languages = Language::where('group', $group)->orderBy('group', 'ASC')->pluck('language_code');
    $text = array();
    foreach ($languages as $language) {
        $text[$language] = GoogleTranslate::trans($content, $language);
    }
    return $text;
}
