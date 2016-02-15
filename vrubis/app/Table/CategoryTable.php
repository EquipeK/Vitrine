<?php
namespace App\Table;

use Core\Table\Table;

class CategoryTable extends Table{

    protected $table = 'category';

    /**
     * Récupère la catégorie associé à son identifiant
     * @param $name varchar
     * @return \App\Entity\CategoryEntity
     */
    public function find($id){
        return $this->query("
            SELECT *
            FROM category c, pictures p
            WHERE c.id_category = ? AND c.id_pictures = p.id_pictures
            ORDER BY id_parent, id_category';", [$id], true);
    }
    public function productsByCat($name){
        return $this->query("
            SELECT DISTINCT p.*,pi.*
            FROM product p,product_has_category pc,category c,picture_has_product pp,picture pi
            WHERE p.id_product = pc.product_id_product
            AND pc.category_id_category IN (
                SELECT id_category
                FROM category
                WHERE name LIKE '%$name%')
            AND p.id_product=pp.product_id_product 
            AND pp.picture_id_picture=pi.id_picture
            AND online=1", [$name], false);
    }

    public function sidebarCats(){
        return $this->query("
            SELECT *
            FROM category c
            WHERE c.itemSequence = 1
            ORDER BY id_category");
    }
    
    public function navProduct1(){
        return $this->query("
            SELECT *
            FROM category c
            WHERE c.itemSequence = 2
            ORDER BY id_category");
    }

    public function navProduct2(){
        return $this->query("
            SELECT *
            FROM category c
            WHERE c.itemSequence = 3
            ORDER BY id_category");
    }
}           