<!DOCTYPE html>
<html>
<head>
	<title>Edit Article</title>
</head>
<body>

	<h3>Edit Article</h3>

	<form method="post" action="{{ route('articles.update', $article->id) }}">

		@csrf
		@method('PUT')

		<label>
			author
			<select name="user_id">
				<option value="{{ $article->user_id }}">{{ $article->user->name }}</option>
					@foreach ($users as $user)
						<option value="{{ $user->id }}">{{ $user->name }}</option>
					@endforeach
			</select>
		</label>

		<br>

		<label>
			title
			<input type="text" name="title" value="{{ $article->title }}">
		</label>

		<br>

		<label>
			category
			<select name="category_id">
				<option value="{{ $article->category_id }}">{{ $article->category->name }}</option>
					@foreach ($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
			</select>
		</label>

		<br>

		<label>
			content
			<textarea type="text" name="content">{{ $article->content }}</textarea>
		</label>

		<br>

		<button type="submit">Submit</button>
		
	</form>

</body>
</html>