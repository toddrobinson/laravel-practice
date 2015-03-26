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
		$tags = \App\Tag::lists('name', 'id');
		return view('articles.create', compact('tags'));
	}

	public function store(Requests\ArticleRequest $request)
	{

		$article = Auth::user()->articles()->create($request->all());

		$tagIds = $request->input('tag_list');

		$article->tags()->attach($tagIds);

		flash()->overlay('Your article has been created', 'Good job!');
		return redirect('articles');

	}

	public function edit(Article $article)
	{
		//$article = Article::findOrFail($id);
		$tags = \App\Tag::lists('name', 'id');
		return view('articles.edit', compact('article', 'tags'));
	}

	public function update(Article $article, Requests\ArticleRequest $request)
	{
		//$article = Article::findOrFail($id);

		$article->update($request->all());

		$tagIds = $request->input('tag_list');

		$article->tags()->sync($tagIds);

		return redirect('articles');
	}

}
