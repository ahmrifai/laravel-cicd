<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// psalm-plugin-laravel catches this:
Route::get('/search', function (Request $request) {
    $query = $request->input('q');
    DB::statement("SELECT * FROM users WHERE name = '$query'");
    // TaintedSql: user input flows directly to the SQL query
});
