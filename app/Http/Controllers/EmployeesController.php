<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
     //Mostrar paginas
     public function showListEmployees(){
        return view('admin.dashboard',['route'=>'employees.listEmployees']);            
    }

    public function showAddEmployees(){
        return view('admin.dashboard',['route'=>'employees.addEmployees']);
    }

    //CRUD

    public function addEmployees(){

    }

    public function editEmployees(){

    }

    public function deleteEmployees(){

    }

    public function listEmployees(){

    }
}
