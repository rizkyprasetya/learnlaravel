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

use Illuminate\Http\Request;
use App\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', function () {
    $tasks = Task::pluck('body');
    return view('tasks.index', compact('tasks'));
});

route::get('sl-number', function () {
    return view('sl.number');
});

route::post('sl-number', function (Request $request) {
    $number = $request->input('number');
    return view('sl.vector')->with('number', $number);
});

route::post('sl-cal', slcal::class);
