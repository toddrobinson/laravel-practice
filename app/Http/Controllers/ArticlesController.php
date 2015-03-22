<?php namespace App\Http\Controllers;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;
use Auth;

class ArticlesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index', 'show']]);
	}


	//
	public function index()
	{
			//$articles = Article::orderBy('published_at', 'desc')->get();
			//$articles = Article::latest('published_at')->where('published_at' , '<=' , Carbon::now()) -> orWhere('published_at' , NULL)->get();
			//return $articles;
			//If you just return the objects, it will parse them into JSON

			$articles = Article::latest('published_at')->published()->get();

			return view('articles.index', compact('articles'));

	}

	public function show(Article $article)
	{

		return view('articles.show', compact('article'));

	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(Requests\ArticleRequest $request)
	{
		$article = new Article($request->all());
		Auth::user()->articles()->save($article);
		//validation is happening, typehinted parameters
		//\Session::flash('flash_message', 'Your article has been created!');
		//session()->flash('flash_message', 'Your article has been created!');
		flash()->overlay('Your article has been created', 'Good job!');
		return redirect('articles');

	}

	public function edit(Article $article)
	{
		//$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	public function update(Article $article, Requests\ArticleRequest $request)
	{
		//$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('articles');
	}

}
