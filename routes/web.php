<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', [AuthController::class, 'dashboard'])->name('admin');
Route::get('/admin/login', [AuthController::class, 'formLogin'])->name('admin.login');
Route::post('/admin/login/do',[AuthController::class, 'login'])->name('admin.login.do');
Route::get('/admin/logout',[AuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/companies/list',[CompaniesController::class, 'showListCompanies'])->name('admin.companies.list');
Route::get('/admin/companies/add',[CompaniesController::class, 'showAddCompanies'])->name('admin.companies.add');
Route::post('admin/companies/add/do',[CompaniesController::class,'addCompanies'])->name('admin.companies.add.do');

Route::get('/admin/employees/list',[EmployeesController::class, 'showListEmployees'])->name('admin.employees.list');
Route::get('/admin/employees/add',[EmployeesController::class, 'showAddEmployees'])->name('admin.employees.add');

