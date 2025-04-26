<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;


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


Route::get('/fetch-students', [StudentController::class, 'getStudents']);
Route::post('/create-students', [StudentController::class, 'createStudent']);
Route::get('/students/{id}', [StudentController::class, 'showStudent']);
Route::put('/edit-students/{id}', [StudentController::class, 'updateStudent']);
Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);

///PRODUCT CRUD
Route::get('/fetch-products', [ProductController::class, 'getProducts']); // Fetch all products
Route::post('/create-product', [ProductController::class, 'createProduct']); // Create a new product
Route::get('/product/{id}', [ProductController::class, 'showProduct']); // Show a single product
Route::put('/update-product/{id}', [ProductController::class, 'updateProduct']); // Update an existing product
Route::delete('/delete-products/{id}', [ProductController::class, 'deleteProduct']); // Delete a product

//AUTH LOGIN AND REGISTER

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'user']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/fetch-products', [ProductController::class, 'fetchProducts']);

Route::get('/sanctum/csrf-cookie', [CsrfCookieController::class, 'show']);




Route::group(['middleware' => 'api', 'prefix' => 'auth'],function(){
    Route::get('/display/student',[TransactionController::class,'displayDataUsingJs']);
    Route::post('/add-student', [TransactionController::class, 'addStudent']);
});
