<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class UsuarioController extends Controller {

    public function contato(Request $request) {
        $input = $request->input();
        $model = new UsuarioModel();
        $model->salvar($input);
        return view('private.contact-form');
    }
    
}
