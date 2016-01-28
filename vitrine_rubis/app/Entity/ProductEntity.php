<?php
namespace App\Entity;

use Core\Entity\Entity;

class ProductEntity extends Entity{

    public function getUrl(){
        return BASE_URL.DS.'products'.DS.'show'.DS . $this->id;
    }


}