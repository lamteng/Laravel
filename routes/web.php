<?php

use Illuminate\Support\Facades\Route;

// using SQL to connect
use Illuminate\Support\Facades\DB;

// using Eloquent ORM
use App\Models\pics;

// usig Eloquent ORM for db_list
use App\Models\db_list;

// using Redis
use App\Models\redi;
use Illuminate\Support\Facades\Redis;
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
    // using SQL
    //$pic_name = DB::select('select pic_name from pics where pic_id = ?', [1]);    
    
    // using Eloquent ORM
    $pic_name = App\Models\pics::where('pic_id','=','1')->get();

   // using Eloquent ORM for table db_list
   $db_name = App\Models\db_list::all();
 

   return view('frontend.welcome',['name'=> ''],['db_name'=> $db_name]);
});


