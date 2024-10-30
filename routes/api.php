<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('test-input', function (Request $request) {
    //sleep(1);

    return  response()->json([
        "status" => 200,
        "message" => "Ok.",
        "data" => $request->toArray()
    ]);
});
