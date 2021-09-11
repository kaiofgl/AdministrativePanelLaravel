<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Company;

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

    public function addCompanies(Request $request){
        //Validar request
        $rules = array(
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:100',
            'email' => 'required|unique:companies,email',
            'website' => 'required|unique:companies,website_url',
            'logo' => 'max:10000|mimes:png,jpg,jpeg',
        );
        //Validar logotipo
        $rulesFileExtensions = array(
            'png','jpeg','jpg'
        );
        $file = $request->hasFile('logo');
        if($file){
            $extension = $request->logo->extension();
            if(in_array($extension,$rulesFileExtensions)){
                $path = $request->logo->store('image');
            }else{
                return redirect()->back()
                ->with('error_file','O formato do arquivo é inválido.');    
            }
        }else{
            return redirect()->back()
            ->with('error_file','O campo de Logotipo está vazio.');
        }

        $validation = Validator::make($request->request->all(),$rules);
        if($validation->fails()){
            return redirect()->back()
            ->withErrors($validation); 
        }

        $company = new Company();
        $request->request->add(['logo_path'=>$path]);
        $return = $company->addCompanyToTable($request);
        
        return redirect()->back()
         ->with('success','A empresa foi cadastrada com sucesso!');

    }

    public function editCompanies(){

    }

    public function deleteCompanies(){

    }

    public function listCompanies(){

    }

    
}
