<?php

namespace App\Controller;

use Core\Controller\Controller;

class PagesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Page');
        $this->loadModel('Category');
        $this->loadModel('Product');
    }

    public function index(){
        $pages = $this->Page->all();
        $products = $this->Product->all();
        $sidebarCats = $this->Category->sidebarCats();
        $navProducts = $this->Category->navProduct1();
        $this->render('pages.index', compact('pages','products','sidebarCats','navProducts'));
    }

    public function page($id){
        $pages = $this->Page->find($id);
        $products = $this->Product->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.page', compact('pages','products','sidebarCats'));
    }
    public function sitemap(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.sitemap', compact('pages','sidebarCats'));
    }
    public function rubis(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.rubis', compact('pages','sidebarCats'));
    }
    public function partners(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.partners', compact('pages','sidebarCats'));
    }
    public function team(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.team', compact('pages','sidebarCats'));
    }
    public function support(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.support', compact('pages','sidebarCats'));
    }
    public function preorder(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.preorder', compact('pages','sidebarCats'));
    }
    public function sizeguide(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.sizeguide', compact('pages','sidebarCats'));
    }
    public function informations(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.informations', compact('pages','sidebarCats'));
    }
    public function legalmentions(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.legalmentions', compact('pages','sidebarCats'));
    }
    public function cgv(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.cgv', compact('pages','sidebarCats'));
    }
    public function recruitment(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.recruitment', compact('pages','sidebarCats'));
    }
    public function stores(){
        $pages = $this->Page->all();
        $sidebarCats = $this->Category->sidebarCats();
        $this->render('pages.stores', compact('pages','sidebarCats'));
    }
}