<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; // NB: remember to reference the controller with methods.



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/* define your route based on laravel 8 route identition */
Route::resource('students', StudentController::class);

// Route::get('students/{id}', 'StudentController@getStudent');
// Route::post('students/', 'StudentController@addstudent');

