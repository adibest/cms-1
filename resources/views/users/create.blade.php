<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>

	<h3>Create User</h3>

	<form method="post" action="{{ route('users.store') }}">

		@csrf

		<label>
			nama
			<input type="text" name="name">
		</label>

		@if($errors->has('name'))
			<span>{{ $errors->first('name') }}</span>
		@endif

		<br>

		<label>
			email
			<input type="email" name="email">
		</label>

		<br>

		<label>
			password
			<input type="password" name="password">
		</label>

		<br>

		<button type="submit">Submit</button>
		
	</form>

</body>
</html>