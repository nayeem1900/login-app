<?php

namespace App\Traits;

Trait AdminPermission{

public function checkRequestPermission(){

    if(

empty(auth()->user()->role->permission['permission']['slider']['view']) && \Route::is('sliders.view') ||

empty(auth()->user()->role->permission['permission']['slider']['add']) && \Route::is('sliders.add') ||
empty(auth()->user()->role->permission['permission']['slider']['edit']) && \Route::is('sliders.edit') ||
empty(auth()->user()->role->permission['permission']['slider']['delete']) && \Route::is('sliders.sliders.delete') ||

empty(auth()->user()->role->permission['permission']['logo']['view']) && \Route::is('sliders.sliders.delete') ||
empty(auth()->user()->role->permission['permission']['logo']['add']) && \Route::is('sliders.sliders.delete') ||
empty(auth()->user()->role->permission['permission']['logo']['edit']) && \Route::is('sliders.sliders.delete') ||
empty(auth()->user()->role->permission['permission']['logo']['delete']) && \Route::is('sliders.sliders.delete')





    ){
        return response()->view('admin.home');
    }
}

}