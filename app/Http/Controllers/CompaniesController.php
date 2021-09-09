<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    //Mostrar paginas
    public function showListCompanies(){
        return view('admin.dashboard',[
            'route'=>'companies.listCompanies',
            'data'=> [
                'title'=>'data Tittle',
            ]
        ]);            
    } 

    public function showAddCompanies(){
        return view('admin.dashboard',['route'=>'companies.addCompanies']);
    }

    //CRUD

    public function addCompanies(){

    }

    public function editCompanies(){

    }

    public function deleteCompanies(){

    }

    public function listCompanies(){

    }

    
}
