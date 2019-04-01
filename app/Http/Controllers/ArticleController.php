<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;

class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::all();

    	return view('articles.index', compact('articles'));
    }

    public function create()
	{
		$articles = Article::all(['id', 'user_id', 'category_id']);
    	return view('articles.create', compact('articles',$articles));
		// return view('articles.create');
	}

	public function store(Request $request)
	{
		Article::create($request->all());

		return redirect('/articles');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$article = Article::find($id);

		return view('articles.edit', compact('article'));
	}

	public function update(Request $request, $id)
	{
		$article = Article::find($id);

		$article->update($request->all());

		return redirect('/articles');
	}

	public function destroy($id)
	{
		$article = Article::find($id);

		$article->delete();

		return redirect('/articles');
	}
}
