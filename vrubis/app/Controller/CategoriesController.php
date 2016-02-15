<?php

namespace App\Controller;

use Core\Controller\Controller;

class CategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
        $this->loadModel('Category');
        $this->loadModel('Product');
        $this->loadModel('Picture');
    }

    public function show($name){
        $sidebarCats = $this->Category->sidebarCats();
        $navProducts1 = $this->Category->navProduct1();
        $navProducts2 = $this->Category->navProduct2();
        $picture = $this->Picture->pictureCategory($name);
        $products = $this->Category->productsByCat($name);
        $this->render('categories.show', compact('sidebarCats','navProducts1','navProducts2','products','picture'));
    }
}