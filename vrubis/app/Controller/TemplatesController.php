<?php

namespace App\Controller;

use Core\Controller\Controller;

class TemplatesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
    }

    public function sidebar(){
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('templates.sidebar', compact('sidebarCats'));
    }
}