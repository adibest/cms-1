<!DOCTYPE html>
<html>
<head>
	<title>Create Article</title>
</head>
<body>

	<h3>Create Article</h3>

	<form method="post" action="{{ route('articles.store') }}">

		@csrf

		<label>
			author
			<select name="user_id">
				@foreach($articles as $article)
				<option value="{{ $article->user_id }}">{{ $article->user->name }}</option>
				@endforeach
			</select>
		</label>

		<br>

		<label>
			title
			<input type="text" name="title">
		</label>

		<br>

		<label>
			category
			<select name="category_id">
				@foreach($articles as $article)
					<option value="{{ $article->category_id }}">{{ $article->category->name }}</option>
				@endforeach
			</select>
		</label>

		<br>

		<label>
			content
			<textarea type="text" name="content"></textarea>
		</label>

		<br>

		<button type="submit">Submit</button>
		
	</form>

</body>
</html>