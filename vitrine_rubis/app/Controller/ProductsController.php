<?php

namespace App\Controller;

use Core\Controller\Controller;

class ProductsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Product');
    }


    public function show($id){
        $products = $this->Product->find($id);
        $this->render('products.show', compact('products'));
    }

    public function index(){
    	$products = $this->Product->all();
    	$this->render('products.index', compact('products'));
    }

}