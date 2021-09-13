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
        //Validar Requisição
        $rules = array(
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:100',
            'email' => 'required|unique:companies,email',
            'website' => 'required|min:3|max:100|unique:companies,website_url',
            'logo' => 'max:10000|mimes:png,jpg,jpeg',
        );
        //Validar logotipo

        //Regra de extensao de arquivo
        $rulesFileExtensions = array(
            'png','jpeg','jpg'
        );

        //Faz a validacao das regras sob a requisição
        $validation = Validator::make($request->request->all(),$rules);

        //Verifica se o arquivo é válido
        $file = $request->hasFile('logo');
        
        //Retorna os erros das regras
        if($file){
            //Armazena a extensao do arquivo
            $extension = $request->logo->extension();
            //Caso a extensao do arquvio seja válida
            if(in_array($extension,$rulesFileExtensions)){
                $path = $request->logo->store('image');
            }else{
                return redirect()->back()
                ->withErrors($validation)
                ->with('error_file','O formato do arquivo é inválido.')
                ->withInput();  
            }
        }else{
            return redirect()->back()
            ->withErrors($validation)
            ->with('error_file','O campo de Logotipo está vazio.')
            ->withInput();
        }
        
        if($validation->fails()){
            return redirect()->back()
            ->withErrors($validation)
            ->withInput();
        }
        $company = new Company();
        //Adiciona o caminho da logotipo no objeto da requisição
        $request->request->add(['logo_path'=>$path]);
        $company->addCompanyToTable($request);
        
        return redirect()->back()
            ->with('success','A empresa foi cadastrada com sucesso!');

    }

    public function listCompanies(){
        $company = new Company();
        $data = $company->listCompanies();
        return view('admin.dashboard',[
            'route'=>'companies.listCompanies',
            'data'=>$data
        ]);
    }

    public function editCompanies(){

    }

    public function deleteCompanies(int $id){
        $company = new Company();
        $deleted = $company::destroy($id);
        // $data = $company->listCompanies();
        return redirect('/admin/companies/list')
            ->with('message',($deleted)? 'A empresa foi deletada com sucesso!' : 'Ocorreu um erro ao excluir a empresa');
    }


    
}
