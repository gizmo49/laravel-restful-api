<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;


class ArticlesController extends Controller{
    public function getArticles(){
        return Article::all();
    }

    public function findArticles($id){
        return Article::find($id);
    }
    
}
