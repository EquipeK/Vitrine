<?php

namespace App\Controller;

use Core\Controller\Controller;

class ProductsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
        $this->loadModel('Product');
    }


    public function show($id){
        $product = $this->Product->find($id);
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('products.show', compact('product','sidebarCats'));
    }

    public function index(){
    	$products = $this->Product->all();
        $categories = $this->Category->all();
    	$this->render('products.index', compact('products','categories'));
    }

}