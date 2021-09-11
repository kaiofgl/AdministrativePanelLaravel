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

}
