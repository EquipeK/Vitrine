<?php
namespace App\Table;

use Core\Table\Table;

class ProductTable extends Table{

    protected $table = 'product';


    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ProductEntity
     */
    public function find($id){
        return $this->query("
            SELECT DISTINCT p.*
            FROM product p,picture_has_product pp,picture pi,product_has_category pc,category c
            WHERE p.id_product=?
            AND pp.product_id_product=?
            AND pi.id_picture=pp.picture_id_picture
            AND pc.product_id_product=?
            AND pc.category_id_category=c.id_category
            AND online=1", [$id], true);
    }

    public function all(){
        return $this->query("
            SELECT *
            FROM product p,picture_has_product pp,picture pi
            WHERE p.id_product=pp.product_id_product 
            AND pp.picture_id_picture=pi.id_picture
            AND online=1");
    }
}