<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>

	<h3>Users List</h3>
	<h5><a href="{{ route('users.create') }}">Create</a></h5>

	<table>

		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Created at</th>
			<th>Number of Articles</th>
			<th>Action</th>
		</tr>
		
		@foreach($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->created_at }}</td>
			<td>{{ $user->articles()->count() }}</td>
			<td>
				<form method="post" action="{{ route('users.destroy', $user->id) }}">
					<a href="{{ route('users.edit', $user->id) }}">Edit</a>
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