<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Category;
use App\Model\User;

class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::orderBy('created_at', 'desc')->get();

    	return view('articles.index', compact('articles'));
    }

    public function create()
	{
		$articles = Article::all();

    	return view('articles.create', compact('articles'));
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
		$articles = Article::all();
		$categories = Category::all();
		$users = User::all();

		return view('articles.edit', compact('article','articles','categories','users'));
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
