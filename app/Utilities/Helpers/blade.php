<?php
/**
 * $path her hansi bir fayli yoludur 
 */
if(!function_exists('_asset')){
    function _asset(?string $path)  
    {
        return request()->secure() ? secure_asset($path) : asset($path);
    }
}
/** 
 * bu funsiyaya ehtiyac yoxdu eslinde ama ne vaxt bir yerde istifade etmek olsa 
 * auth()->user()->name auth()->user()->surname cagirilan zaman 2 sorgu istifade olur 
 * bu funksiya bir sorugu gondererek 2 melumati alib birlesdirir 
*/
if(!function_exists('_fullname')){
    function _fullname() : string  
    {
        $user= auth()->user();
        return $user->name.' '.$user->surname;
    }
}