<?php

use App\Models\Setting;
use App\Models\Section;
use App\Models\Porto;
use App\Models\Blog;

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

function getBlogPost(){
    return Blog::all();
}

// blogpostbyslug
function getBlogPostBySlug($slug){
    return Blog::where('slug', $slug)->first();
}
