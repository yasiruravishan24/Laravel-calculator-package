<?php


Route::get('calculator', [Yasiru\Calculator\Controllers\CalculatorController::class, 'index']);
Route::get('calculate',[Yasiru\Calculator\Controllers\CalculatorController::class, 'calculate'])->name('calculator.calculate');


