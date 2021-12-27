<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\SubadminController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\IbchkConrtoller;
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

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/foundation_committee',[FrontendController::class,'foundationcommittee'])->name('foundationcommittee');
Route::get('/at_glance',[FrontendController::class,'atglance'])->name('atglance');
Route::get('/executive_committee',[FrontendController::class,'executivecommittee'])->name('executivecommittee');
Route::get('/health_education_committee',[FrontendController::class,'healtheducationcommittee'])->name('healtheducationcommittee');
Route::get('/audit_committee',[FrontendController::class,'auditcommittee'])->name('auditcommittee');
Route::get('/hospital_committee',[FrontendController::class,'hospitalcommittee'])->name('hospitalcommittee');
Route::get('/community_hospital_board',[FrontendController::class,'communityhospitalboard'])->name('communityhospitalboard');
Route::get('/education_committee',[FrontendController::class,'educationcommittee'])->name('educationcommittee');
Route::get('/community_hospital_committee',[FrontendController::class,'communityhospitalcommittee'])->name('communityhospitalcommittee');
/*Route::get('ibchkdoctor/ajax/{ibchd_id}',[FrontendController::class,'getIbchDoctor'])->name('ajax-doctor');*/
//Bank_Hospital
Route::get('ibch',[FrontendController::class,'ibch'])->name('ibch');





/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin-dashboard

Route::group(['prefix'=>'admin','middleware'=>['admin','auth','permission']],function () {

    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    //Role Management

    Route::resource('role',RoleController::class);
    Route::resource('permission',PermissionController::class);
    Route::resource('subadmin',SubadminController::class);


});


Route::group(['prefix'=>'logos','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[LogoController::class,'view'])->name('logos.view');
    Route::get('/add',[LogoController::class,'add'])->name('logos.add');
    Route::post('/store',[LogoController::class,'store'])->name('logos.store');
    Route::get('/edit/{id},',[LogoController::class,'edit'])->name('logos.edit');
    Route::post('/update/{id},',[LogoController::class,'update'])->name('logos.update');
    Route::post('/delete/{id},',[LogoController::class,'delete'])->name('logos.delete');



});
Route::group(['prefix'=>'sliders','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[SliderController::class,'view'])->name('sliders.view');
    Route::get('/add',[SliderController::class,'add'])->name('sliders.add');
    Route::post('/store',[SliderController::class,'store'])->name('sliders.store');
    Route::get('/edit/{id},',[SliderController::class,'edit'])->name('sliders.edit');
    Route::post('/update/{id},',[SliderController::class,'update'])->name('sliders.update');
    Route::post('/delete/{id},',[SliderController::class,'delete'])->name('sliders.delete');



});

// IBCHK
Route::group(['prefix'=>'ibchkdep','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[IbchkConrtoller::class,'view'])->name('ibchk.dept.view');
    Route::get('/add',[IbchkConrtoller::class,'add'])->name('ibchk.dept.add');
    Route::post('/store',[IbchkConrtoller::class,'store'])->name('ibchk.dept.store');
    Route::get('/edit/{id}',[IbchkConrtoller::class,'edit'])->name('ibchk.dept.edit');
    Route::post('/update/{id}',[IbchkConrtoller::class,'update'])->name('ibchk.dept.update');
    Route::post('/delete/{id}',[IbchkConrtoller::class,'delete'])->name('ibchk.dept.delete');

    Route::get('/ibchkdoctor/view',[IbchkConrtoller::class,'ibchkdoctorview'])->name('ibchk.doctor.view');
    Route::get('/ibchkdoctor/add',[IbchkConrtoller::class,'ibchkdoctoradd'])->name('ibchk.doctor.add');
    Route::post('/ibchkdoctor/store',[IbchkConrtoller::class,'ibchkdoctorstore'])->name('ibchk.doctor.store');
    Route::get('/ibchkdoctor/edit/{id}',[IbchkConrtoller::class,'ibchkdoctoredit'])->name('ibchk.doctor.edit');
    Route::post('/ibchkdoctor/update/{id}',[IbchkConrtoller::class,'ibchkdoctorupdate'])->name('ibchk.doctor.update');
    Route::post('/ibchkdoctor/delete/{id}',[IbchkConrtoller::class,'ibchkdoctordelete'])->name('ibchk.doctor.delete');
    Route::get('ibchkdoctor/ajax/',[IbchkConrtoller::class,'getIbchDoctor'])->name('ajax-doctor');
});





/*Route::group(['middleware'=>'admin','auth'],function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    });

});*/

//User-Dashboard

/*Route::group(['middleware'=>'user','auth'],function () {
    Route::prefix('user')->group(function () {

        Route::get('/dashboard', 'UserController@index')->name('user.dashboard');

    });

});*/

Route::group(['prefix'=>'user','middleware'=>['user','auth']],function () {

    Route::get('/dashboard',[UserController::class,'index'])->name('user.dashboard');

});