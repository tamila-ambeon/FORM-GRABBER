<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); });

Route::get('/inputs', function () { return view('inputs'); });
    Route::get('/inputs/hidden', function () {          return view('hidden'); });
    Route::get('/inputs/text', function () {            return view('text'); });
    Route::get('/inputs/textarea', function () {        return view('textarea'); });
    Route::get('/inputs/quill-editor', function () {    return view('quill-editor'); });
    Route::get('/inputs/number', function () {          return view('number'); });
    Route::get('/inputs/select', function () {          return view('select'); });
    Route::get('/inputs/radio', function () {           return view('radio'); });
    Route::get('/inputs/checkbox', function () {        return view('checkbox'); });
    Route::get('/inputs/date-picker', function () {     return view('date-picker'); });
    Route::get('/inputs/datetime-picker', function () { return view('datetime-picker'); });

Route::get('/buttons', function () { return view('buttons'); });
Route::get('/backend', function () { return view('backend'); });
