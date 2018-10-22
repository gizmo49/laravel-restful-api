<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;


class ArticlesController extends Controller{
    public function getArticles(){
        return Article::all();
    }

    public function findArticles(Article $id){
        return ($id);
    }
    
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
    
}
