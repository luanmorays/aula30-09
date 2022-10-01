<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;   // coordenador
use App\Models\Pessoa;         // DAO (data acess object)
use App\Models\Contato;

class UsuarioController extends Controller {

    public function contato(Request $request) {
        $input = $request->input();
        $model = new UsuarioModel();
        $model->salvar($input);
        return view('private.contact-form');
    }
    
    public function insere() {
        $pessoa = new Pessoa();
        $pessoa->nome = 'Machado';
        $pessoa->sobrenome = 'de Assis';
        $pessoa->save();
        echo 'Dados inseridos com sucesso';



        
        // o framework , internamente, organiza as informções para serem inseridas no banco de dados
        //$v = $pessoa->getAttributes();
        //print_r($v);
    }
    public function leitura($modo = 'all'){

        if(strcmp($modo, 'all') == 0){
            $v = Contato::all();
        }

        if(strcmp($modo, 'find') == 0){
            $row = Contato::find(3);
                echo $row ['name'].', '.$row['subject'].'<br>';
                return;
            
        }  
    
        if(strcmp($modo, 'where') == 0){
            $v = Contato::where('id', '>', 2)->get();
        }
   
        foreach ($v as $row){
            echo $row ['name'].', '.$row['subject'].'<br>';
        }
    }
}