<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\facades\Validator;
use Illuminate\Validation\Rule;

class EmployeesController extends Controller
{
     //Mostrar paginas
     public function showListEmployees(){
        $employee = new Employee();
        $data = $employee->listEmployees();
        $dataCompanies = Company::all();
       

        return view('admin.dashboard',[
            'route' =>'employees.listEmployees',
            'data'=>$data,
            'data_companies'=>$dataCompanies,
        ]);            
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
            ->with('message','O funcionário foi cadastrado com sucesso!');
    }

    public function updateEmployees(Request $request){
        $id = $request->id;
        $cpf_clean = preg_replace('/[^\p{L}\p{N}\s]/u', '', $request->cpf);
        $request->merge(['cpf' => $cpf_clean]);
        $rules = array(
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:100|unique:employees,email,'.$id,
                Rule::unique('employees','email')->ignore($id),
            'phone' => 'required|min:3|max:100',
            'cpf' => 'required|cpf|unique:employees,cpf,'.$id,
                Rule::unique('employees','cpf')->ignore($id),
            'companies' => 'min:0|not_in:0',
        );


        $validation = Validator::make($request->request->all(),$rules);

        if($validation->fails()){
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }
        $employee = new Employee();
        $employee->updateEmployees($request,$id);
        return redirect()->back()
            ->with('message','O funcionário foi atualizado com sucesso!');
    }

    public function deleteEmployees(int $id){
        $employee = new Employee();
        $deleted = $employee::destroy($id);
        return redirect('/admin/employees/list')
            ->with('message',($deleted)? 'O funcionário foi deletado com sucesso!' : 'Ocorreu um erro ao excluir o funcionário');
    }

    public function showEditEmployees(int $id){
        $employee = new Employee();
        $data = $employee->editEmployees($id);

        if($data[0] && $data[1]){
            return view('admin.dashboard',[
                'route'=>'employees.editEmployees',
                'data'=>$data
            ]);
        }
        return redirect()->back()
            ->with('message',"Ocorreu um erro ao tentar pegar os dados do funcionário.");
    }
}
