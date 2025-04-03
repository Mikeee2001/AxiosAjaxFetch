<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/students', [StudentController::class, 'getStudents']);
Route::post('/create-students', [StudentController::class, 'createStudent']);

// Update a student
Route::put('/students/{id}', [StudentController::class, 'updateStudent']);
// Delete student
Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);


Route::group(['middleware' => 'api', 'prefix' => 'auth'],function(){
    Route::get('/display/student',[TransactionController::class,'displayDataUsingJs']);
});
