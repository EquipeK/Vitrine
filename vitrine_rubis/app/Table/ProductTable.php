<?php
namespace App\Table;

use Core\Table\Table;

class ProductTable extends Table{

    protected $table = 'products';


    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function find($id){
        return $this->query("
            SELECT *
            FROM products
            WHERE id_product = ?", [$id], true);
    }

    public function all(){
        return $this->query("
            SELECT *
            FROM products p,picture_to_product pt,pictures pi
            WHERE p.id_product=pt.id_product 
            AND pi.id_picture=pt.id_picture
            AND online=1");
    }
}