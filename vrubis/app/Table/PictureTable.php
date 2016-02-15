<?php
namespace App\Table;

use Core\Table\Table;

class PictureTable extends Table{

    protected $table = 'picture';

    /**
     * Récupère la catégorie associé à son identifiant
     * @param $name varchar
     * @return \App\Entity\PictureEntity
     */
    public function pictureCategory($name){
        return $this->query("
            SELECT DISTINCT p.* 
            FROM category c, picture_has_category pc, picture p 
            WHERE pc.category_id_category IN(
                SELECT id_category
                FROM category
                WHERE name LIKE '%$name%')
            AND pc.picture_id_picture = p.id_picture;", [$name]);
    }

    public function pictureProduct($id){
        return $this->query("
            SELECT *
            FROM category c, picture_has_category pc, picture p
            WHERE pc.id_category = ? AND pc.id_pictures = p.id_pictures;", [$id], true);
    }
}