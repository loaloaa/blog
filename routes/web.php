<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function (){
    $orders = DB::table('orders')->get();

    return view('index',compact('orders'));
});

Route :: get('about',function(){
    if(isset ($_GET['name']))
    $name=  $_GET['name'];
    else $name = "lolo";
    return view('about',compact('name'));
 } );

Route :: GET ('tasks',function(){
    $Tasks=['task1',
    'task2',
    'task3'];
    return view('Tasks',compact('Tasks'));
});


Route :: post('delete/{id}', function($id){
    DB:: table('orders')->where ('id',$id)->delete();

    return redirect()->back();
});

Route::post('editt/{id}',function($id){
    $n = request('taskName');
    if($n){
    DB::table('orders')->where('id',$id)->update(['name'=>$n]);

    return redirect('/');}
    else
    return view('edit',compact('id'));

});

Route::get('insert',function(){
    DB::table('orders')->insert([
        'name'=>$_GET['name'],
        'created_at'=>now(),
        'updated_at'=>now()
    ]);
    return redirect()->back();
    });

