<?php

use Illuminate\Support\Facades\Route;

Route::get('/look', function () {
   print("hello");
});


Route::get('/hello/{name?}', function ($name=null) {
    if($name)
    print("hello  ". $name);
    else{
        print "welcome";
    }
});

Route::get('/add/{num1}/{num2}', function ($num1 , $num2) {
    print("sum of " .$num1 ." + " .$num2 . " = ". $num1+$num2);
})
-> where('num1','[0-9]+')
->where('num2','[0-9]+');

Route::get('/info/{name}/{age}', function ($name , $age) {
    print("my name is _  " .$name ." _age _" .$age);
})
-> where('age','[0-9]+')
->where('name','[a-zA-Z\s]+');

// Route::get('/view/{rr}/{name}', function ($rr, $name) {
//     return view($rr, ['name' => $name]);
// });

Route::get('/view/home/{name?}', function ( $name=null) {
    return view('home', ['name' => $name]);
});

Route::get('/view/loop', function () {
    $naam = ['harshvardhan','ruhaan','shurya'];
    return view('loop', ['names' => $naam]);
});