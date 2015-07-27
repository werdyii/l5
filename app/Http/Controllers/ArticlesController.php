<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ArticlesController extends Controller {

	public function index()
	{
	  /*
	  $articles = Article::all();
	  $articles = Article::latest('published_at')->get();
	  $articles = Article::latest('published_at')->where('published_at', '<=' , Carbon::now() )->get();
	  $articles = Article::latest('published_at')->published()->get();
	  */
	  
	  $articles = Article::all();
	  
	  return view('articles.index',compact('articles'));
	}

  public  function show($id)
  {
    $article = Article::findOrFail($id);
    
    /*
    if(is_null($article)){ 
      abort(404);
    }
    */
    return view('articles.show',compact('article'));
  }
  
  public function create()
  {
    return view('articles.create');
  }

  public function store()
  {
    $input = Request::all();
    
    /*
    $input['published_at'] = Carbon::now();
    $input = Request::get('title');
    
    $article = new Article;
    $article->title = $input['title'];
    
    $article = new Article(['title' => $input['title'] ]);
    */
    
    Article::create($input);
    
    return redirect('articles');
  }
  
  public function edit($id){
    
    $article = Article::findOrFail($id);
    
    return view('articles.edit');
  }
  
}
