<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<h3>Edit User</h3>

	<form method="post" action="{{ route('users.update', $user->id) }}">

		@csrf
		@method('PUT')

		<label>
			nama
			<input type="text" name="name" value="{{ $user->name }}">
		</label>

		<br>

		<label>
			email
			<input type="email" name="email" value="{{ $user->email }}">
		</label>

		<br>

		<label>
			password
			<input type="password" name="password" value="{{ $user->password }}">
		</label>

		<br>

		<button type="submit">Submit</button>
		
	</form>

</body>
</html>