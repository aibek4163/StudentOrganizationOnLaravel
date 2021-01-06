<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserAuth;
use App\Models\Organization;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('indexBoots');
});

Route::view('/indexBoots',"indexBoots") ;
Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/leaders', function () {
    return view('leaders');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/sign_in', function () {
    return view('sign_in');
});
Route::get('/admin_page',function(){
    return view('create');
});
Route::get('/admin', function () {
    return view('adminMaster');
});

Route::post('admin',[AdminController::class,'addAdmin']);

Route::post('user',[UserController::class,'register']);

Route::get('/profile',function(){
    return view('profile_page');
});

Route::post("login",[UserAuth::class,'login']);

Route::get('/admin/FAQ',  function () {
    $faqs=DB::select('SELECT * FROM f_a_q_s');
    return view('manageFAQ',compact('faqs'));
});

Route::get('/indexBoots',  function () {
    $orgs=DB::select('SELECT * FROM organizations');
    return view('indexBoots',compact('orgs'));
});

Route::get('/organizations',[OrganizationController::class,'getAllOrganization']);

Route::get('/organization/{id}',[OrganizationController::class,'details']);

Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/about_iitu', function () {
    return view('about_iitu');
});
Route::get('/achiev', function () {
    $data=DB::select('SELECT * FROM achievements');
    return view('achiev',compact('data'));
});

Route::get('/userFaq', function () {
    $data=DB::select('SELECT * FROM f_a_q_s');
    return view('userFaq',compact('data'));
});

Route::get('/schedule', function () {
    $data=DB::select('SELECT * FROM schedule');
    return view('schedule',compact('data'));
});

Route::get('/tips', function () {
    return view('tips');
});

Route::get("/cancel_request/{id}",[OrganizationController::class,'cancel_request']);

Route::get("/send_request/{id}",[UserController::class,'send_request']);

Route::get("/requests",[OrganizationController::class,'getAllRequest']);

Route::get("/confirm_request/{id}",[OrganizationController::class,'confirm_requests']);

Route::get("/delete_from_org/{id}",[OrganizationController::class,'delete_user']);

Route::get('/reject_from_org/{id}',[OrganizationController::class,'reject_user']);

Route::post('/admin/FAQ',[FAQController::class,'addFAQ']);

Route::get('FAQ',[FAQController::class,'index']);

Route::post('admin/delete/{id}',[FAQController::class,'delete']);

Route::post('admin/edit/{id}',[FAQController::class,'edit']);

Route::post('/search',[UserController::class,'search']);

Route::get('/filter',[UserController::class,'filter']);

Route::get('/logout',[UserController::class,'logout']);

Route::post('update_profile',[UserController::class,'update_profile']);

Route::post('update_picture',[UserController::class,'update_picture']);

Route::post('update_password',[UserController::class,'update_password']);

Route::post('create_organization',[UserController::class,'create_organization']);
//750802
//Route::get('FAQ',[FAQController::class,'index']);

//Route::get('FAQ',[FAQController::class,'getData']);
