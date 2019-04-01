<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>

	<h3>Articles List</h3>
	<h5><a href="{{ route('articles.create') }}">Create</a></h5>

	<table>

		<tr>
			<th>Author</th>
			<th>Title</th>
			<th>Category</th>
			<th>Created at</th>
			<th>Action</th>
		</tr>
		
		@foreach($articles as $article)
		<tr>
			<td>{{ $article->user->name }}</td>
			<td>{{ $article->title }}</td>
			<td>{{ $article->category->name }}</td>
			<td>{{ $article->created_at }}</td>
			<td>
				<form method="post" action="{{ route('articles.destroy', $article->id) }}">
					<a href="{{ route('articles.edit', $article->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach

	</table>

</body>
</html>