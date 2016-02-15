<?php
namespace App\Entity;

use Core\Entity\Entity;

class CategoryEntity extends Entity{

    public function getUrl(){
        return BASE_URL.DS.'categories'.DS.'show'.DS . $this->name;
    }
}