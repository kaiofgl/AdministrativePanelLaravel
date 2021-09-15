<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', [AuthController::class, 'dashboard'])->name('admin');
Route::get('/admin/login', [AuthController::class, 'formLogin'])->name('admin.login');
Route::post('/admin/login/do',[AuthController::class, 'login'])->name('admin.login.do');
Route::get('/admin/logout',[AuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/companies/add',[CompaniesController::class, 'showAddCompanies'])->name('admin.companies.add');
Route::post('admin/companies/add/do',[CompaniesController::class,'addCompanies'])->name('admin.companies.add.do');
Route::get('/admin/companies/list',[CompaniesController::class, 'listCompanies'])->name('admin.companies.list');
Route::get('/admin/companies/delete/{id}',[CompaniesController::class, 'deleteCompanies'])->name('admin.companies.delete');
Route::get('/admin/companies/edit/{id}',[CompaniesController::class, 'showEditCompanies'])->name('admin.companies.edit');
Route::post('/admin/companies/edit/do', [CompaniesController::class, 'updateCompanies'])->name('admin.companies.edit.do');


Route::get('/admin/employees/add',[EmployeesController::class, 'showAddEmployees'])->name('admin.employees.add');
Route::get('/admin/employees/list',[EmployeesController::class, 'showListEmployees'])->name('admin.employees.list');
Route::post('admin/employees/add/do',[EmployeesController::class,'addEmployees'])->name('admin.employees.add.do');
