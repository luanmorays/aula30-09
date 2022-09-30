<?php 

namespace App\Helpers\DataBuilders;

class ImageCardDataBuilder {
    
    private $cards = [

        [
            'imagem' => 22, 
            'subtitulo' => 'blouse', 
            'titulo' => 'White Blouse', 
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor',
            'preco_atual' => 59,
            'preco_original' => 199,
            'desejo_marcado' => true
        ],

        [
            'imagem' => 36, 
            'subtitulo' => 'shirt', 
            'titulo' => 'Cool Shirt', 
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor',
            'preco_atual' => 39,
            'preco_original' => 99,
            'desejo_marcado' => false
        ],

        [
            'imagem' => 29, 
            'subtitulo' => 'shoe', 
            'titulo' => 'Black Shoe', 
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor',
            'preco_atual' => 257,
            'preco_original' => 419,
            'desejo_marcado' => true
        ],

        [
            'imagem' => 15, 
            'subtitulo' => 'socks', 
            'titulo' => 'Casual Socks', 
            'descricao' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor',
            'preco_atual' => 19,
            'preco_original' => 29,
            'desejo_marcado' => false
        ]

    ];

    public function getData() {
        return $this->cards;
    }

}
