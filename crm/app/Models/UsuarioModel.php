<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contato;

class UsuarioModel extends Model {
    
    public function salvar($data) {
        $contato['name']= $data['name'];        
        $contato['email']= $data['email'];        
        $contato['subject']= $data['subject'];        
        $contato['message']= $data['message']; 
        
        // onde vamos inserir estes dados???
        $contato = new Contato();
        Contato::create($contato);

        // quem vai inserir esses dados??

        
    }

}
