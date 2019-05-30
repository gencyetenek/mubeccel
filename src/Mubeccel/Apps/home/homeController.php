<?php
class homeController
{
    public function index()
    {
        return View::load("main", "index");
    }

    public function about(){
        return View::load("post", "about");
    }

    public function contact(){
        return View::load("post", "contact");
    }

    public function download(){
        return View::load("main", "download");
    }

}
?>