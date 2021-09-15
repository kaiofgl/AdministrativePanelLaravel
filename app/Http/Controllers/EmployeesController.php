<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\facades\Validator;

class EmployeesController extends Controller
{
     //Mostrar paginas
     public function showListEmployees(){
        return view('admin.dashboard',['route'=>'employees.listEmployees']);            
    }

    public function showAddEmployees(){
        $employee = new Company();
        $data = $employee->returnAllCompanies();
        return view('admin.dashboard',[
            'route'=>'employees.addEmployees',
            'data' => $data
        ]);    
    }

    //CRUD

    public function addEmployees(Request $request){

        $cpf_clean = preg_replace('/[^\p{L}\p{N}\s]/u', '', $request->cpf);
        $request->merge(['cpf' => $cpf_clean]);
        $rules = array(
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:100|unique:employees,email',
            'phone' => 'required|min:3|max:100',
            'cpf' => 'required|cpf|unique:employees,cpf,'.$cpf_clean,
            'companies' => 'min:0|not_in:0',
        );

        $validation = Validator::make($request->request->all(),$rules);

        if($validation->fails()){
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }
        $employee = new Employee();
        $employee->addEmployeesToTable($request);
        return redirect()->back()
            ->with('success','O funcionário foi cadastrado com sucesso!');
    }

    public function editEmployees(){

    }

    public function deleteEmployees(){

    }

    public function listEmployees(){

    }
}
