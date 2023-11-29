<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnivController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login_proses',[LoginController::class,'login_proses'])->name('login_proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/role',[LoginController::class,'role'])->name('role');
Route::post('/role_proses',[LoginController::class,'role_proses'])->name('role_proses');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::get('/univForm',[LoginController::class,'univForm'])->name('univForm');
Route::get('/regstudent',[LoginController::class,'regstudent'])->name('regstudent');
Route::get('/regstudent2',[LoginController::class,'regstudent2'])->name('regstudent2');
Route::get('/reguniv',[LoginController::class,'reguniv'])->name('reguniv');



Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register_proses',[LoginController::class,'register_proses'])->name('register_proses');

Route::group(['prefix' => 'admin','middleware' => ['auth'],'as' => 'admin.'], function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/intern',[HomeController::class,'intern'])->name('intern');
    Route::get('/projectA',[HomeController::class,'projectA'])->name('projectA');
    Route::get('/projectB',[HomeController::class,'projectB'])->name('projectB');
    Route::get('/projectC',[HomeController::class,'projectC'])->name('projectC');
    Route::get('/projectD',[HomeController::class,'projectD'])->name('projectD');
    Route::get('/projectE',[HomeController::class,'projectE'])->name('projectE');
    Route::get('/newproject',[HomeController::class,'newproject'])->name('newproject');
    Route::get('/administration',[HomeController::class,'administration'])->name('administration');
    Route::get('/activity',[HomeController::class,'activity'])->name('activity');
    Route::get('/preferences',[ProfileController::class,'preferences'])->name('preferences');
    Route::get('/register',[HomeController::class,'register'])->name('register');
});

Route::get('/profile',[UnivController::class,'profile'])->name('profile');
Route::get('/list',[UnivController::class,'list'])->name('list');
Route::get('/editmhs',[UnivController::class,'editmhs'])->name('editmhs');

Route::get('/univ',[AdminController::class,'univ'])->name('univ');
Route::get('/project',[AdminController::class,'project'])->name('project');
Route::get('/selection',[AdminController::class,'selection'])->name('selection');
Route::get('/info',[AdminController::class,'info'])->name('info');
Route::get('/editproject',[AdminController::class,'editproject'])->name('editproject');
Route::get('/detailmhs',[AdminController::class,'detailmhs'])->name('detailmhs');
Route::get('/projectreq',[AdminController::class,'projectreq'])->name('projectreq');
Route::get('/addproject',[AdminController::class,'addproject'])->name('addproject');
Route::get('/partnereq',[AdminController::class,'partnereq'])->name('partnereq');