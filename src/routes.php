<?php

Route::get('/calculator', function() {
    echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Ezgajups\Calculator\Controllers\CalculatorController@add');

Route::get('substract/{a}/{b}', 'Ezgajups\Calculator\Controllers\CalculatorController@substract');
