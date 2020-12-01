<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\VacationController;
use App\Http\Controllers\Api\DepartmentController;
use \App\Http\Controllers\Api\UserSkillController;
use App\Models\User;
use App\Models\Skill;
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



Route::get('/users', [UserController::class,'index']);
Route::get('/users/{user}',[UserController::class, 'show']);
Route::post('/users', [UserController::class,'store']);
Route::put('/users/{user}', [UserController::class,'update']);
Route::delete('/users/{user}',[UserController::class,'delete']);

Route::get('/users/{id}/skills', [UserSkillController::class, 'index']);

Route::get('skills', [SkillController::class,'index']);
Route::get('skills/{skill}', [SkillController::class,'show']);
Route::post('skills', [SkillController::class,'store']);
Route::put('skills/{skill}', [SkillController::class,'update']);
Route::delete('skills/{skill}', [SkillController::class,'delete']);

Route::get('departments', [DepartmentController::class,'index']);
Route::get('departs/{depart}', [DepartmentController::class,'show']);
Route::post('departs', [DepartmentController::class,'store']);
Route::put('departs/{depart}', [DepartmentController::class,'update']);
Route::delete('departs/{depart}', [DepartmentController::class,'delete']);


Route::get('vacations', [VacationController::class,'index']);
Route::get('vacations/{vacation}', [VacationController::class,'show']);
Route::post('vacations', [VacationController::class,'store']);
Route::put('vacations/{vacation}', [VacationController::class,'update']);
Route::delete('vacations/{vacation}', [VacationController::class,'delete']);


Route::get('/users/{user}/vacations',[UserController::class,'showvacations']);


Route::get('/users/{user}/skills',[UserController::class,'showskills']);

Route::apiResource('departments.users',DepartmentController::class,['only'=>['store1','update1','destroy1']]);