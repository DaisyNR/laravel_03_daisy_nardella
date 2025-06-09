<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articles = [
            ['title'=>'Spedizioni internazionali', 'price'=>'€'. 20],
            ['title'=>'Catering', 'price'=>'€'. 100],
            ['title'=>'Giardinaggio', 'price'=>'€'. 10],
            ['title'=>'Babysitting', 'price'=>'€'. 45]
        ];
    
    public function articles()
    {
        return view('articoli',['articles'=>$this->articles]);
    }

    public function detail($title, $price)
    {
        foreach($this->articles as $article){
            if ($title == $article['title']) {
                return view('Article.dettaglioArticle', ['title'=>$title, 'price'=>$price]);
            }
        }
    }
}
