<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Employee extends Model
{
    use HasFactory;

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
}
