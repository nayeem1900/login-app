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
use App\Http\Controllers\Backend\MotijheelController;
use App\Http\Controllers\Backend\EtenderController;
use App\Http\Controllers\Backend\CarrierController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\IbhdeptController;
use App\Http\Controllers\Backend\AssigndoctorController;
use App\Http\Controllers\Backend\DoctorregController;
use App\Http\Controllers\Backend\DefaultController;
use App\Http\Controllers\Backend\PasswordController;
use App\Http\Controllers\Backend\GalleryController;

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
/*Route::get('/head',[FrontendController::class,'Head'])->name('index');*/
Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/etender',[FrontendController::class,'etender'])->name('etender');
Route::get('/gallary',[FrontendController::class,'gallary'])->name('gallary');
//Doctor Search option
Route::get('/department',[FrontendController::class,'DepartmentDoctor'])->name('department-doctor');
Route::get('find-doctor-branch/',[FrontendController::class,'BranchFindDoctor'])->name('find-doctor-branch');
Route::get('find-doctor-name/',[FrontendController::class,'NameFindDoctor'])->name('find-doctor-name');
//end
Route::get('/hospital-info',[FrontendController::class,'hospitalinfo'])->name('hospital-info');
Route::get('/career',[FrontendController::class,'career'])->name('career');
Route::get('/jakat',[FrontendController::class,'jakat'])->name('jakat');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
//ajax doctor call
Route::get('ibchkdoctor/ajax',[IbchkConrtoller::class,'getIbchDoctor'])->name('ajax-doctor');
Route::get('finddoctor/ajax',[IbchkConrtoller::class,'findDoctor'])->name('ajax-find-doctor');
Route::post('finddoctor/department/ajax',[IbchkConrtoller::class,'findDoctorDepartment'])->name('ajax-find-doctor-department');
Route::post('finddoctor/branch/ajax',[IbchkConrtoller::class,'findDoctorBranch'])->name('ajax-find-doctor-branch');
Route::get('finddoctor/name/ajax/{name}',[IbchkConrtoller::class,'findDoctorName'])->name('ajax-find-doctor-name');
//end
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
Route::get('ibch-doctor',[FrontendController::class,'ibchDoctor'])->name('ibch.ent-doctor');
Route::get('ibch-cardiology',[FrontendController::class,'ibchCard'])->name('ibch.card-doctor');
Route::get('ibch-gyno',[FrontendController::class,'ibchGyno'])->name('ibch.gyno-doctor');
Route::get('ibch-uro',[FrontendController::class,'ibchUro'])->name('ibch.uro-doctor');
Route::get('ibchchild',[FrontendController::class,'childIbch'])->name('ibch.child-doctor');
Route::get('ibchdep',[FrontendController::class,'ibchDep'])->name('ibch.dep');
Route::get('ibchmedi',[FrontendController::class,'ibchmedi'])->name('ibch.medi');
Route::get('ibchchestmedi',[FrontendController::class,'chestMedi'])->name('ibch.chestmedi');
//Bank_Hospital Motijheel

/*Route::get('branch/{id}',[FrontendController::class,'motijheel'])->name('motijheel');
Route::get('dep-doctor/',[FrontendController::class,'motijheel'])->name('motijheel');*/

//Mugdha
Route::get('ibh_mugdha',[FrontendController::class,'mugdha'])->name('mugdha');
//Barisal
Route::get('barisal',[FrontendController::class,'barisal'])->name('barisal');
//Khulna
Route::get('khulna',[FrontendController::class,'khulna'])->name('khulna');
//Nayapaltan
Route::get('ibh_paltan',[FrontendController::class,'Paltan'])->name('paltan');
//Rajshahi Luxmipur
Route::get('ibh_rajshahi_luxmipur',[FrontendController::class,'IbhRajshahiLux'])->name('ibh_rajshahi_luxmipur');
//Rajshahi Nawdapara
Route::get('ibh_rajshahi_nawdapara',[FrontendController::class,'IbhRajshahiNawdapara'])->name('ibh_rajshahi_nawdapara');
//Chattogram
Route::get('ibh_chottagram',[FrontendController::class,'IbhChottagram'])->name('ibh_chottagram');
///Community Hospital
//Faridpur
Route::get('ibch-faridpur',[FrontendController::class,'IbchFaridpur'])->name('ibch-faridpur');
//Rangpur
Route::get('ibch-rangpur',[FrontendController::class,'IbchRangpur'])->name('ibch-rangpur');
//Dinajpur
Route::get('ibch-dinajpur',[FrontendController::class,'IbchDinajpur'])->name('ibch-dinajpur');
//Naogaon
Route::get('ibch-naogaon',[FrontendController::class,'IbchNaogaon'])->name('ibch-naogaon');
//Jhenaidah
Route::get('ibch-jhenaidah',[FrontendController::class,'IbchJhenaidah'])->name('ibch-jhenaidah');
//Manikgonj
Route::get('ibch-manikgonj',[FrontendController::class,'IbchManikgonj'])->name('ibch-manikgonj');
//Satkhera
Route::get('ibch-satkhera',[FrontendController::class,'IbchSatkhera'])->name('ibch-satkhera');
//Madaripur
Route::get('ibch-madaripur',[FrontendController::class,'IbchMadaripur'])->name('ibch-madaripur');
//Mymensingh
Route::get('ibch-mymensingh',[FrontendController::class,'IbchMymensingh'])->name('ibch-mymensingh');
//Find Doctor

Route::get('find-doctor1/{id}',[FrontendController::class,'Finddoctor1'])->name('find-doctor1');
/*Route::get('branch/head/{id}',[FrontendController::class,'Head'])->name('head');*/


//Islami Bank Institute of Science & Technology
Route::get('ibit/dhaka',[FrontendController::class,'IbitDhaka'])->name('ibit-dhaka');

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


Route::group(['prefix'=>'password','middleware'=>['admin','auth','permission']],function () {

    Route::get('/password/view',[PasswordController::class,'passwordView'])->name('profiles.password.view');
    Route::post('/password/update',[PasswordController::class,'passwordUpdate'])->name('profiles.password.update');


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
//Gallery

Route::group(['prefix'=>'gallerys','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[GalleryController::class,'view'])->name('gallerys.view');
    Route::get('/add',[GalleryController::class,'add'])->name('gallerys.add');
    Route::post('/store',[GalleryController::class,'store'])->name('gallerys.store');
    Route::get('/edit/{id},',[GalleryController::class,'edit'])->name('gallerys.edit');
    Route::post('/update/{id},',[GalleryController::class,'update'])->name('gallerys.update');
    Route::post('/delete/{id},',[GalleryController::class,'delete'])->name('gallerys.delete');

});

//Etender
Route::group(['prefix'=>'etenders','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[EtenderController::class,'view'])->name('etenders.view');
    Route::get('/add',[EtenderController::class,'add'])->name('etenders.add');
    Route::post('/store',[EtenderController::class,'store'])->name('etenders.store');
    Route::get('/edit/{id},',[EtenderController::class,'edit'])->name('etenders.edit');
    Route::post('/update/{id},',[EtenderController::class,'update'])->name('etenders.update');
    Route::post('/delete/{id},',[EtenderController::class,'delete'])->name('etenders.delete');
    Route::post('/download',[EtenderController::class,'download'])->name('etenders.download');



});

//Carrier
Route::group(['prefix'=>'carriers','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[CarrierController::class,'view'])->name('carriers.view');
    Route::get('/add',[CarrierController::class,'add'])->name('carriers.add');
    Route::post('/store',[CarrierController::class,'store'])->name('carriers.store');
    Route::get('/edit/{id},',[CarrierController::class,'edit'])->name('carriers.edit');
    Route::post('/update/{id},',[CarrierController::class,'update'])->name('carriers.update');
    Route::post('/delete/{id},',[CarrierController::class,'delete'])->name('carriers.delete');
    Route::post('/download',[CarrierController::class,'download'])->name('carriers.download');



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

  /*  Route::get('ibchkdoctor/ajax',[IbchkConrtoller::class,'getIbchDoctor'])->name('ajax-doctor');*/
});

/*<!!!!!-----Islami Bank Hospital Motijheel!!!!!!!!------>*/
Route::group(['prefix'=>'motijheeldep','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[MotijheelController::class,'view'])->name('motijheel.dept.view');
    Route::get('/add',[MotijheelController::class,'add'])->name('motijheel.dept.add');
    Route::post('/store',[MotijheelController::class,'store'])->name('motijheel.dept.store');
    Route::get('/edit/{id}',[MotijheelController::class,'edit'])->name('motijheel.dept.edit');
    Route::post('/update/{id}',[MotijheelController::class,'update'])->name('motijheel.dept.update');
    Route::post('/delete/{id}',[MotijheelController::class,'delete'])->name('motijheel.dept.delete');


});

///Branch
Route::group(['prefix'=>'branch','middleware'=>['admin','auth','permission']],function () {

   Route::get('/viewontest',[BranchController::class,'view'])->name('branch.view');
    Route::get('/add',[BranchController::class,'add'])->name('branch.add');
    Route::post('/store',[BranchController::class,'store'])->name('branch.store');
    Route::get('/edit/{id},',[BranchController::class,'edit'])->name('branch.edit');
    Route::post('/update/{id},',[BranchController::class,'update'])->name('branch.update');
    Route::post('/delete/{id},',[BranchController::class,'delete'])->name('branch.delete');

});
//Department

Route::group(['prefix'=>'department','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[IbhdeptController::class,'view'])->name('dep.view');
    Route::get('/add',[IbhdeptController::class,'add'])->name('dep.add');
    Route::post('/store',[IbhdeptController::class,'store'])->name('dep.store');
    Route::get('/edit/{id},',[IbhdeptController::class,'edit'])->name('dep.edit');
    Route::post('/update/{id},',[IbhdeptController::class,'update'])->name('dep.update');
    Route::post('/delete/{id},',[IbhdeptController::class,'delete'])->name('dep.delete');


});

//Assign Doctor


Route::group(['prefix'=>'assigndoctor','middleware'=>['admin','auth','permission']],function () {
    Route::get('/view1',[AssigndoctorController::class,'view1'])->name('assign.doctor.view');
  /*  Route::get('/view',[AssigndoctorController::class,'view'])->name('assign.doctor.view');*/
    Route::get('/add',[AssigndoctorController::class,'add'])->name('assign.doctor.add');
    Route::post('/store',[AssigndoctorController::class,'store'])->name('assign.doctor.store');
    Route::get('/edit/{branch_id},',[AssigndoctorController::class,'edit'])->name('assign.doctor.edit');
    Route::post('/update/{branch_id},',[AssigndoctorController::class,'update'])->name('assign.doctor.update');
    Route::post('/delete/{id},',[AssigndoctorController::class,'delete'])->name('assign.doctor.delete');
    Route::post('/assign/department/details/{branch_id},',[IbhdeptController::class,'details'])->name('assign.doctor.department.details');


});

//Doctor Registration
Route::group(['prefix'=>'doctor','middleware'=>['admin','auth','permission']],function () {
    Route::get('/reg/view',[DoctorregController::class,'view'])->name('doctor.registration.view');
    Route::get('/reg/add',[DoctorregController::class,'add'])->name('doctor.registration.add');
    Route::post('reg/store',[DoctorregController::class,'store'])->name('doctor.registration.store');
    Route::get('/reg/edit/{doctor_id}',[DoctorregController::class,'edit'])->name('doctor.registration.edit');
    Route::post('/reg/update/{doctor_id}',[DoctorregController::class,'update'])->name('doctor.registration.update');
    Route::get('/branch-dept-wise',[DoctorregController::class,'BranchDeptWise'])->name('doctor.branch.dept.wise');
    Route::get('/reg/details/{doctor_id}',[DoctorregController::class,'details'])->name('doctor.registration.details');

    Route::get('/ibch/doctor/view/',[DoctorregController::class,'ibchDoctor'])->name('dep.ibch.doctor.details');

});

Route::get('/get-doctor',[DefaultController::class,'getDoctor'])->name('get-doctor');


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