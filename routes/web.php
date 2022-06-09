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
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PurchaseController;
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
Route::get('/hospital-info',[FrontendController::class,'hospitalinfo'])->name('hospital-info');
Route::get('/career',[FrontendController::class,'career'])->name('career');
Route::get('/jakat',[FrontendController::class,'jakat'])->name('jakat');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');

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

//Nayapaltan
Route::get('ibh_paltan',[FrontendController::class,'Paltan'])->name('paltan');
/*Route::get('branch/head/{id}',[FrontendController::class,'Head'])->name('head');*/

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

    Route::get('ibchkdoctor/ajax',[IbchkConrtoller::class,'getIbchDoctor'])->name('ajax-doctor');
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
//Suppliers
Route::group(['prefix'=>'suppliers','middleware'=>['admin','auth']],function () {
    Route::get('/view',[SupplierController::class,'view'])->name('suppliers.view');
    Route::get('/add',[SupplierController::class,'add'])->name('suppliers.add');
    Route::post('store',[SupplierController::class,'store'])->name('suppliers.store');
    Route::get('/edit/{id}',[SupplierController::class,'edit'])->name('suppliers.edit');
    Route::post('/update/{id}',[SupplierController::class,'update'])->name('suppliers.update');
    Route::post('/delete/{id}',[SupplierController::class,'delete'])->name('suppliers.delete');

});
//Customers
Route::group(['prefix'=>'customers','middleware'=>['admin','auth']],function () {
    Route::get('/view',[CustomerController::class,'view'])->name('customers.view');
    Route::get('/add',[CustomerController::class,'add'])->name('customers.add');
    Route::post('store',[CustomerController::class,'store'])->name('customers.store');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/update/{id}',[CustomerController::class,'update'])->name('customers.update');
    Route::post('/delete/{id}',[CustomerController::class,'delete'])->name('customers.delete');

});
//Units
Route::group(['prefix'=>'units','middleware'=>['admin','auth']],function () {
    Route::get('/view',[UnitController::class,'view'])->name('units.view');
    Route::get('/add',[UnitController::class,'add'])->name('units.add');
    Route::post('store',[UnitController::class,'store'])->name('units.store');
    Route::get('/edit/{id}',[UnitController::class,'edit'])->name('units.edit');
    Route::post('/update/{id}',[UnitController::class,'update'])->name('units.update');
    Route::post('/delete/{id}',[UnitController::class,'delete'])->name('units.delete');

});
//Categories
Route::group(['prefix'=>'categories','middleware'=>['admin','auth']],function () {
    Route::get('/view',[CategoryController::class,'view'])->name('categories.view');
    Route::get('/add',[CategoryController::class,'add'])->name('categories.add');
    Route::post('store',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/update/{id}',[CategoryController::class,'update'])->name('categories.update');
    Route::post('/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');

});
//Products
Route::group(['prefix'=>'products','middleware'=>['admin','auth']],function () {
    Route::get('/view',[ProductController::class,'view'])->name('products.view');
    Route::get('/add',[ProductController::class,'add'])->name('products.add');
    Route::post('store',[ProductController::class,'store'])->name('products.store');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::post('/update/{id}',[ProductController::class,'update'])->name('products.update');
    Route::post('/delete/{id}',[ProductController::class,'delete'])->name('products.delete');

});
//Purchase
Route::group(['prefix'=>'purchases','middleware'=>['admin','auth']],function () {
    Route::get('/view',[PurchaseController::class,'view'])->name('purchases.view');
    Route::get('/add',[PurchaseController::class,'add'])->name('purchases.add');
    Route::post('store',[PurchaseController::class,'store'])->name('purchases.store');
    Route::get('/edit/{id}',[PurchaseController::class,'edit'])->name('purchases.edit');
    Route::post('/update/{id}',[PurchaseController::class,'update'])->name('purchases.update');
    Route::post('/delete/{id}',[PurchaseController::class,'delete'])->name('purchases.delete');

});
Route::get('/get-doctor',[DefaultController::class,'getDoctor'])->name('get-doctor');
Route::get('/get-category',[DefaultController::class,'getCategory'])->name('get-category');
Route::get('/get-product',[DefaultController::class,'getProduct'])->name('get-product');

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