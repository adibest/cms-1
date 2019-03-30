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
			<th>Action</th>
		</tr>
		
		@foreach($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->created_at }}</td>
			<td></td>
		</tr>
		@endforeach

	</table>

</body>
</html>