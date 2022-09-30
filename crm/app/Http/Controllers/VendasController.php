<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BreadCrumbModel;
use App\Models\VendasModel;

// um controlador é um gerador de páginas
// cada método exibe uma página para o usuário
class VendasController extends Controller {
    
    public function index() {
        $bcm = new BreadCrumbModel();
        $m = $bcm->getByName('data');
        return view('private.lista_vendas', ['path' => $m]);
    }

    // documentação de código:
    // diz o que o método FAZ; não COMO faz!

    /**
     * Gera o relatório de vendas por departamento
     * 
     * @param $mes: mes da execução das vendas
     * @param $departamento: nome do departamento que realizou as vendas
     */
    public function relatorio($mes, $departamento) {
        return view('private.relatorio', 
            ['mes' => $mes, 'departamento' => $departamento]
        );
    }

    public function produtos() {
        $model = new VendasModel();
        $cards = $model->getCards();
        return view('site.ecommerce', ['cards' => $cards]);
    }

}
