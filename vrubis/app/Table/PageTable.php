<?php
namespace App\Table;

use Core\Table\Table;

class PageTable extends Table{

    protected $table = 'page_cms';


    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function find($id){
        return $this->query("
            SELECT p.id_page_cms, p.title, p.content
            FROM page_cms p
            WHERE p.id_page_cms = ?", [$id], true);
    }
    
    public function all(){
        return $this->query("
            SELECT *
            FROM page_cms p");
    }

}