<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecordController;

use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('upload');
});

Route::post('/upload', function () {

    // if(request()->has('mycsv')){

    //     $data = array_map('str_getcsv',file(request()->mycsv));

    //     $header = $data[0];

    //     unset($data[0]);
        
    //     return $data;
    // }

    // return 'please upload file';

});

Route::apiResource('/record', RecordController::class);

Route::resource('/test', TestController::class);
