<?php

use App\Models\Setting;
use App\Models\Section;
use App\Models\Porto;

function getSetting($key)
{
    $data = Setting::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    } else {
        return null;
    }
}

function getSections($key)
{
    $data = Section::where('post_as', $key)->first();
    if(isset($data->id)){
        return $data;
    } else {
        return null;
    }
}

// portofolio
function getPortofolio(){
    return Porto::all();
}
