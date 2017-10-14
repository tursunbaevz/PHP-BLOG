<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'text' => 'required'
    	]);

    	//create new artice

    	$article = new Article;
    	$article->title = $request->input('title');
        $article->text = $request->input('text');
    	
    	//save 

    	$article->save();

        // notice

    	return redirect('/')->with('success', 'Вы создали новый Блог!');

    }  

    //get  all articles
    public function getArticles(){
        $articles = Article::all();

        return view('articles')->with('articles', $articles);

    } 

}



