<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/store/{category?}/{item?}', function ($category = null,$item = null){
    if(isset($category)){
        if(isset($item)){
            return $item;
        }

        return $category;
    }

    return 'STORE';
});

/*
Route::get('/store', function (){
    $filter = request('style');
    if(isset($filter)){

    return 'store '.strip_tags($filter).'';

    }
    else{
        return 'انت شايف كل الحاجات يا حبيبنا من غير فلترة';
    }
});

*/

