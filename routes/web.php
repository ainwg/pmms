<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AccountController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usermanagement', function () {
    return view('manageUserManagement.userManagementCashier_screen');
});
Route::get('/staffdetailadmin', function () {
    return view('manageUserManagement.staffDetailsAdmin_screen');
});
Route::get('/schedulemenu', function () {
    return view('manageUserManagement.scheduleMenu_screen');
});
Route::get('/addschedule', function () {
    return view('manageUserManagement.addschedule_screen');
});
Route::get('/stafflistadmin', function () {
    return view('manageUserManagement.staffListAdmin_screen');
});
Route::get('/staffdetail', function () {
    return view('manageUserManagement.staffDetails_screen');
});
Route::get('/staffdetailadmin', function () {
    return view('manageUserManagement.staffDetailsAdmin_screen');
});
Route::get('/addstaff', function () {
    return view('manageUserManagement.addStaff_screen');
});
Route::get('/editstaff', function () {
    return view('manageUserManagement.editStaff_screen');
});
Route::get('/attendance', function () {
    return view('manageUserManagement.attendance_screen');
});
Route::get('/usermanagementa', function () {
    return view('manageUserManagement.userManagementAdmin_screen');
});
Route::get('/addattendance', function () {
    return view('manageUserManagement.addAttendance_screen');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//promotion
Route::get('/promotion/add','App\Http\Controllers\promotionController@addpromotion')->name('promotion.add231');
Route::get('/promotion','App\Http\Controllers\promotionController@index')->name('promotion');
Route::get('/promotionadmin','App\Http\Controllers\promotionController@indexAdmin')->name('admin.promotion');
Route::get('/promotion/{id}/edit','App\Http\Controllers\promotionController@edit')->name('promotion.edit');
Route::post('/promotion/{id}/update','App\Http\Controllers\promotionController@update');
Route::get('/promotion/{id}/delete','App\Http\Controllers\promotionController@delete')->name('promotion.delete');
Route::post('/promotion/create','App\Http\Controllers\promotionController@createAdmin')->name('promotion.create');
Route::get('/promotion/{id}','App\Http\Controllers\promotionController@detail')->name('promotion.detail');
// Route::get('/promotion','App\Http\Controllers\promotionController@index')->name('admin.attendance');

//attendance
Route::post('/attendance/create','App\Http\Controllers\attendanceController@create');
Route::get('/attendance/{id}','App\Http\Controllers\attendanceController@index')->name('admin.attendance');
Route::get('/attendance/add','App\Http\Controllers\attendanceController@add')->name('add.attendace');

//staff
Route::get('/stafflist','App\Http\Controllers\staffController@index');
Route::get('/stafflistadmin','App\Http\Controllers\staffController@indexadmin');
Route::get('/staffDetail/{id}','App\Http\Controllers\staffController@staffDetail')->name('staff.detail');
Route::get('/staffDetailadmin/{id}','App\Http\Controllers\staffController@staffDetailAdmin')->name('admin.staff.detail');
Route::get('/stafflistadmin/{id}/edit','App\Http\Controllers\staffController@edit')->name('admin.staff.edit');
Route::post('/stafflistadmin/{id}/update','App\Http\Controllers\staffController@update');
Route::post('/stafflistadmin/create','App\Http\Controllers\staffController@create');
Route::get('/stafflistadmin/{id}/delete','App\Http\Controllers\staffController@delete')->name('admin.staff.delete');

//schedulestaff
Route::get('/schedule','App\Http\Controllers\scheduleController@index');
Route::post('/schedule/create','App\Http\Controllers\scheduleController@create')->name('schedule.add');
Route::get('/schedule/add','App\Http\Controllers\scheduleController@add');
Route::get('/schedule/edit','App\Http\Controllers\scheduleController@edit');
Route::get('/schedule/destroy','App\Http\Controllers\scheduleController@destroy');
Route::get('/schedule/store','App\Http\Controllers\scheduleController@store')->name('schedule.store');
Route::post('/schedule/update','App\Http\Controllers\scheduleController@update');

//scheduleadmin
Route::get('/scheduleadmin','App\Http\Controllers\scheduleController@indexAdmin');
Route::post('/scheduleadmin/createAdmin','App\Http\Controllers\scheduleController@createAdmin')->name('admin.schedule.add');
Route::get('/scheduleadmin/{id}/edit','App\Http\Controllers\scheduleController@edit')->name('admin.schedules.edit');
Route::post('/scheduleadmin/{id}/update','App\Http\Controllers\scheduleController@update');
Route::get('/scheduleadmin/{id}/delete','App\Http\Controllers\scheduleController@delete')->name('admin.schedules.delete');

//Vendor Controller
Route::get('/VendorMainPage','App\Http\Controllers\VendorController@ViewMainPage');
Route::get('/AddVendorPage','App\Http\Controllers\VendorController@AddVendorPage');
Route::get('/ViewVendorPage','App\Http\Controllers\VendorController@ViewVendorPage');
Route::get('/EditVendorPage','App\Http\Controllers\VendorController@EditVendorPage');
Route::get('/create','App\Http\Controllers\VendorController@create');
Route::get('/DeleteVendorPage/{id}/delete','App\Http\Controllers\VendorController@delete');
Route::get('/EditVendorPage/{id}/edit','App\Http\Controllers\VendorController@edit');
Route::post('/UpdateVendorPage/{id}/update','App\Http\Controllers\VendorController@update');
Route::get('/WeeklyReportPage','App\Http\Controllers\ReportController@ViewWeeklyReport');
Route::get('/MonthlyReportPage','App\Http\Controllers\ReportController@ViewMonthlyReport');
Route::get('/YearlyReportPage','App\Http\Controllers\ReportController@ViewYearlyReport');
Route::get('/StockReportPage','App\Http\Controllers\ReportController@ViewStockReport');

//inventory Controller
Route::get('/inventory','App\Http\Controllers\inventoryController@index');
Route::get('/inventory/form','App\Http\Controllers\inventoryController@form');
Route::post('/inventory/create','App\Http\Controllers\inventoryController@create');
Route::get('/inventory/{id}/confirm','App\Http\Controllers\inventoryController@confirm');
Route::get('/inventory/{id}/delete','App\Http\Controllers\inventoryController@delete');
Route::get('/inventory/{id}/edit','App\Http\Controllers\inventoryController@edit');
Route::post('/inventory/{id}/update','App\Http\Controllers\inventoryController@update');

//purchase Controller
Route::get('/pos','App\Http\Controllers\purchaseController@pos');
Route::post('/add','App\Http\Controllers\purchaseController@add');
Route::get('/pay','App\Http\Controllers\purchaseController@pay');

//transaction Controller
Route::get('/pay/cash','App\Http\Controllers\transactionController@cash');
Route::get('/pay/balance','App\Http\Controllers\transactionController@balance');
Route::get('/pay/qr','App\Http\Controllers\transactionController@qr');
Route::get('/pay/success','App\Http\Controllers\transactionController@success');

// Account Controller
Route::controller(AccountController::class)->group(function () {
    Route::get('/account/make-opening','makeOpening');
    Route::post('/account/open-register','openRegister');
    Route::get('/account/view-sales','viewSales');
    Route::post('/account/close-register','closeRegister');
    Route::get('/account/view-profit','viewProfit');
    Route::get('/account/get-profit-data','getProfitData');
    Route::get('/account/download-statement','downloadStatement');
    Route::get('/account/view-expenses','viewExpenses');
    Route::get('/account/add-expenses','addExpenses');
    Route::post('/account/insert-expenses','insertExpenses');
    Route::get('/account/get-expenses','getExpenses')->name('expenses.get');

});

