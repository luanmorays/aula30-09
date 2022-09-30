<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Libraries\Cards\ImageCard;
use App\Helpers\DataBuilders\ImageCardDataBuilder;

class VendasModel extends Model {
    
    public function getCards() {
        $dataBuilder = new ImageCardDataBuilder();
        $data = $dataBuilder->getData();
        $html = '';

        foreach ($data as $cardData) {
            $card = new ImageCard($cardData);
            $html .= $card->getHTML();
        }

        return $html;
    }
    
}
