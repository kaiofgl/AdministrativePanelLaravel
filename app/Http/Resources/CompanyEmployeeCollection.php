<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
class CompanyEmployeeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $employees = [
            'company_data'=>new CompanyResource(Company::find($request->id))
        ];

        foreach($this->collection as $employee){
            array_push($employees,[
                'name'=>$employee->name,
                'email'=>$employee->email,
                'phone'=>$employee->phone,
                'cpf'=>$employee->cpf,
            ]);
        }
        return $employees;
    }
}
