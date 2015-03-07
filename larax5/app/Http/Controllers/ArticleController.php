<?php namespace App\Http\Controllers;

class ArticleController extends HomeController {

    public function create()
    {
        return view('article/article');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
