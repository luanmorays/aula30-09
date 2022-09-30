<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BreadCrumbModel extends Model {
    
    public function getByName($name) {
        return $this->{$name}();
    }

    private function data() {
        return ['links' => [
            ['label' => 'Home', 'href' => 'http://'], 
            ['label' => 'Library', 'href' => 'http://'], 
            ['label' => 'Social', 'href' => 'http://'], 
            ['label' => 'Psicology', 'href' => 'http://'], 
            ['label' => 'Data', 'href' => '']
        ]];
    }

    private function report() {
        return ['links' => [
            ['label' => 'Home', 'href' => 'http://'], 
            ['label' => 'Library', 'href' => 'http://'], 
            ['label' => 'Social', 'href' => 'http://'], 
            ['label' => 'Report', 'href' => '']
        ]];
    }

}
