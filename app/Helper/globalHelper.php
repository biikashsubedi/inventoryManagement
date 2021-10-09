<?php


use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cookie;

function authUser()
{
    return \Auth::user();
}

function setRoleCache($user)
{
    return \Cache::put('role-' . $user->id, $user->role);
}

function getRoleCache($user)
{
    return \Cache::get('role-' . $user->id);
}

function clearRoleCache($user)
{
    return \Cache::forget('role-' . $user->id);
}
//function frontendUser()
//{
//    return Auth::guard('frontendUsers')->user();
//}
//function getCmsConfig($label)
//{
//    $value = "";
//    if ($label == "cms title") {
//        $con = 'title';
//    } elseif ($label == "cms logo") {
//        $con = 'logo';
//    } elseif ($label == "cms theme color") {
//        $con = 'color';
//    } else {
//    }
//    $data = Cookie::get($con);
//    if (isset($data) || $data !== null) {
//        $value = $data;
//    } else {
//        $data = conf::where('label', $label)->first()->value;
//        $value = $data;
//    }
//    return $value;
//}
//function generateToken($length)
//{
//    return bin2hex(openssl_random_pseudo_bytes($length));
//}
//
//function showInSideBar($check)
//{
//    return $check;
//}
//
//function modules()
//{
//    $modules = Config::get('cmsConfig.modules');
//    return $modules;
//}
//
//function configTypes()
//{
//    return ['file', 'text', 'textarea', 'number'];
//}
//
//function getCountries()
//{
//    $http = new Client();
//    $response = $http->get('https://restcountries.eu/rest/v2/all');
//    $countries = (\GuzzleHttp\json_decode($response->getBody()->getContents()));
//    return transformCountries($countries);
//}
//
//function transformCountries($countries)
//{
//    $transformedCountries = [];
//    foreach ($countries as $key => $value) {
//        $transformedCountries[$key]['name'] = $value->name;
//        $transformedCountries[$key]['alpha_code'] = $value->alpha2Code;
//        $transformedCountries[$key]['alpha_code_3'] = $value->alpha3Code;
//        $transformedCountries[$key]['native_name'] = $value->nativeName;
//        $transformedCountries[$key]['alternate_spellings'] = json_encode($value->altSpellings, JSON_UNESCAPED_SLASHES);
//        $transformedCountries[$key]['calling_codes'] = json_encode($value->callingCodes, JSON_UNESCAPED_SLASHES);
//        $transformedCountries[$key]['currencies'] = json_encode($value->currencies, JSON_UNESCAPED_SLASHES);
//        $transformedCountries[$key]['languages'] = json_encode($value->languages, JSON_UNESCAPED_SLASHES);
//        $transformedCountries[$key]['flag'] = $value->flag;
//    }
//    return $transformedCountries;
//}

//function globalLanguages()
//{
//    $languages = Language::where('group', 'backend')->get();
//    return $languages;
//}

//function setConfigCookie()
//{
//    Cookie::queue('title', conf::where('label', 'cms title')->first()->value, 10000);
//    Cookie::queue('logo', conf::where('label', 'cms logo')->first()->value, 10000);
//    Cookie::queue('color', conf::where('label', 'cms theme color')->first()->value, 10000);
//}

//function localDatetime($dateTime)
//{
//    return Carbon::parse($dateTime)->timezone('Asia/Kathmandu');
//}
//
//function japaneseDateTime($dateTime)
//{
//    return Carbon::parse($dateTime)->timezone('Asia/Tokyo');
//}
//
//function storeLog($performedOn, $msg)
//{
//    $now = Carbon::now()->format('Y-m-d H:i:s');
//    activity()
//        ->performedOn($performedOn)
//        ->log($msg . ' at ' . $now);
//}
//
//function logMessage($modelName, $modelId, $eventName)
//{
//    $user = authUser()->name ?? '--';
//    $now = Carbon::now()->format('Y-m-d H:i:s');
//    return "$modelName of id {$modelId} was <strong>{$eventName}</strong> by {$user} at {$now}.";
//}
//
//function pageIndex($items){
//    $sn = 0;
//    if(method_exists($items, 'perPage') && method_exists($items, 'currentPage')){
//        $sn =$items->perPage() * ($items->currentPage()-1);
//    }
//    return $sn;
//}
//
//function SN($sn, $key){
//    return $sn+=$key+1;
//}
