<?php

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


Route::get('about', function () {
    return view('welcome');
});

Route::get('cats', function () {
    $cats = \App\Cat::all();
    foreach ($cats as $cat) {
        echo $cat->name . "<br>";
    }

    $cat17 = \App\Cat::find(17);
    echo "<p>";
    echo $cat17->name;

    $newcat = new \App\Cat;
    $newcat->name = "Charlie";
    $newcat->gender = "male";
    $newcat->age = 2;
    $newcat->save();

    $newcat->delete();

    \App\Cat::destroy(1);

    $cat2 = \App\Cat::find(2);
    $cat2->name = "Marry";
    $cat2->save();

    \App\Cat::where('id', 2)->update(['name' => "Marry"]);
});