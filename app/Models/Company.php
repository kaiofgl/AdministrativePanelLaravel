<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    //Funcao para adicionar empresa no DB
    public function addCompanyToTable(Request $request){
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website_url = $request->website;
        $company->logo_path = $request->logo_path;
        $company->save();
        return $this;
    }

    public function listCompanies(){
        $company = new Company();
        return $company::paginate(10);
    }

    public function editCompanies(int $id){
        $company = new Company();
        $data = $company::find($id);
        return $data;
    }

    public function updateCompany(Request $request, int $id){
        $company = new Company();
        $dataCompany = $company::find($id);
        $dataCompany->name = $request->name;
        $dataCompany->email = $request->email;
        $dataCompany->website_url = $request->website;
        if($request->logo_path){
            $dataCompany->logo_path = $request->logo_path;
        }
        $dataCompany->save();
        return $this;
    }
}
