<?php 
// não se esqueça: PHP 8 + Laravel requer namespacing
namespace App\Libraries\Cards;

class ImageCard {
    private $data;

    function __construct(array $data) {
        $this->data = $data;
    }

    public function getHTML() {
        $html = '<div class="col-lg-3 col-md-6 mb-4">
                    <div class="card card-ecommerce">'.                        
                        $this->cardImage().
                        $this->cardBody().
                    '</div>
                </div>';
      return $html;
    }

    private function cardImage() {
        $html = '<div class="view overlay z-depth-1">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20('.rand(10, 40).').jpg" class="card-img-top" alt="">
                    <a><div class="mask rgba-white-slight"></div></a>
                </div>';
        return $html;
    }

    private function cardBody() {
        $html = '<div class="card-body text-center no-padding">
                    <a href="" class="text-muted"><h5>'.$this->data['subtitulo'].'</h5></a>
                    <h4 class="card-title">
                        <strong><a href="">'.$this->data['titulo'].'</a></strong>
                    </h4>

                    <p class="card-text">'.$this->data['descricao'].'</p>

                    <div class="card-footer">
                        <span class="float-left">'.$this->data['preco_atual'].'$
                            <span class="discount">'.$this->data['preco_original'].'$</span>
                        </span>
                        <span class="float-right">
                            <a class="'.($this->data['desejo_marcado'] ? 'active' : '').'" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                            <i class="fas fa-heart"></i>
                            </a>
                        </span>
                    </div>
                </div>';
        return $html;
    }

}
