<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>

	<h3>Articles List</h3>
	{{-- <h5><a href="{{ route('users.create') }}">Create</a></h5> --}}

	<table>

		<tr>
			<th>Author</th>
			<th>Title</th>
			<th>Category</th>
			<th>Created at</th>
		</tr>
		
		@foreach($articles as $article)
		<tr>
			<td>{{ $article->user->name }}</td>
			<td>{{ $article->title }}</td>
			<td>{{ $article->category->name }}</td>
			<td>{{ $article->created_at }}</td>
		</tr>
		@endforeach

	</table>

</body>
</html>