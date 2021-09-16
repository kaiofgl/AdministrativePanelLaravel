<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Employee extends Model
{
    use HasFactory;

    public function employees(){
        return $this->hasOne(Employee::class);
    }

    public function addEmployeesToTable(Request $request){
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->cpf = $request->cpf;
        $employee->company_id = $request->companies;
        $employee->save();
        return $this;
    }

    public function listEmployees(){
        // $employee = Employee::where('company_id')->get();
        // $companies = $employee->Company->paginate(10);
        return Employee::paginate(10);
    }

    public function deleteEmployees(int $id){
        dd($id);
    }
    
    public function editEmployees(int $id){
        $findEmployee = Employee::find($id);
        $dataCompanies = Company::all();

        return array($findEmployee, $dataCompanies);
    }

    public function updateEmployees(Request $request, int $id){
        $dataEmployee = Employee::find($id);
        $dataEmployee->name = $request->name;
        $dataEmployee->email = $request->email;
        $dataEmployee->phone = $request->phone;
        $dataEmployee->cpf = $request->cpf;
        $dataEmployee->company_id = $request->companies;
        $dataEmployee->save();
        return $this;
    }

    public function getCompanyName(int $id){
        return Company::find($id);
    }
}
