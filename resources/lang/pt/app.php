<?php
$result =\Illuminate\Support\Facades\Cache::rememberForever('trans.'.app()->getLocale(), function () {
    return \App\Term::all()->pluck('value', 'key')->toArray();
});
return $result;