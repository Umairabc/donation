<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\EmployeeAttendanceController;

Route::get('login',  [AuthController::class, 'login_view'])->name('login_view');
Route::post('login', [AuthController::class, 'login'])->name('login');
//
Route::get('user/register',  [AuthController::class, 'register'])->name('user.register');
Route::post('user/store',  [AuthController::class, 'store'])->name('user.store');
Route::get('user/login',  [AuthController::class, 'userlogin'])->name('user.login');
Route::post('user/login',  [AuthController::class, 'User_Login'])->name('User.Login');

Route::middleware('admin')->group(function () {
Route::get('/', [DonationController::class, 'dashboard'])->name('dashboard');
Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');
Route::get('/donation/create', [DonationController::class, 'create'])->name('donation.create');
Route::post('/donation/store', [DonationController::class, 'store'])->name('donation.store');
Route::get('/donation/delete/{id}', [DonationController::class, 'delete'])->name('donation.delete');
Route::get('/donation/edit/{id}', [DonationController::class, 'edit'])->name('donation.edit');
Route::post('/donation/update/{id}', [DonationController::class, 'update'])->name('donation.update');
//
Route::get('/attendance', [EmployeeAttendanceController::class, 'index'])->name('attendance.index');
Route::get('/attendance/create', [EmployeeAttendanceController::class, 'create'])->name('attendance.create');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
