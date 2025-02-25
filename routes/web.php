<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/{name}', function ($name) {
    echo "El producto es $name";

});

Route::get('/products/{name}/{categoria?}', function ($name,$categoria=null) {
    
    if($categoria ==null){
        echo "El producto ES: $name";
    }else{
            echo "El producto es $name, y su categoria es $categoria";
        }
    }

);

