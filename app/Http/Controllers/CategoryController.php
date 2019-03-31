<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = Category::orderBy('created_at', 'desc')->get();

		return view('categories.index', compact('categories'));
	}

	public function create()
	{
		return view('categories.create');
	}

	public function store(Request $request)
	{
		Category::create($request->all());

		return redirect('/categories');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$category = Category::find($id);

		return view('categories.edit', compact('category'));
	}

	public function update(Request $request, $id)
	{
		$category = Category::find($id);

		$category->update($request->all());

		return redirect('/categories');
	}

	public function destroy($id)
	{
		$category = Category::find($id);

		$category->delete();

		return redirect('/categories');
	}
}
