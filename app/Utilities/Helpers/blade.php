<?php
if(!function_exists('_asset')){
    function _asset(?string $path)  
    {
        return request()->secure() ? secure_asset($path) : asset($path);
    }
}
if(!function_exists('_fullname')){
    function _fullname() : string  
    {
        $user= auth()->user();
        return $user->name.' '.$user->surname;
    }
}