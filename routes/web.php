<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/datos', function () {
    return DB::SELECT("SELECT * FROM FACAJACAB  C WHERE  SER_FACBOLCAJA='040' AND  NUM_FACBOLCAJA='0066907'");
    // $companies = DB::select("SELECT * FROM FACAJACAB  C WHERE  SER_FACBOLCAJA='040' AND  NUM_FACBOLCAJA='0066907'");

    //$companies = DB::connection('other_system')->table('OOPACIENTE')->first();
    // dd($companies);
});
