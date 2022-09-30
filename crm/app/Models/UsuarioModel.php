<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model {
    
    public function salvar($data) {
        // inserir no banco de dados
        echo 'Dados inseridos no BD: <br>';

        foreach($data as $key => $val) {
            echo "$key => $val <br>";
        }
    }

}
