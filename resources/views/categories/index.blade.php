<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
</head>
<body>

	<h3>Categories List</h3>
	<h5><a href="{{ route('categories.create') }}">Create</a></h5>

	<table>

		<tr>
			<th>Name</th>
			<th>Created at</th>
			<th>Action</th>
		</tr>
		
		@foreach($categories as $category)
		<tr>
			<td>{{ $category->name }}</td>
			<td>{{ $category->created_at }}</td>
			<td>
				<form method="post" action="{{ route('categories.destroy', $category->id) }}">
					<a href="{{ route('categories.edit', $category->id) }}">Edit</a>
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