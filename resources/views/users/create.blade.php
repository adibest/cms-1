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

		@if($errors->has('email'))
			<span>{{ $errors->first('email') }}</span>
		@endif

		<br>

		<label>
			password
			<input type="password" name="password">
		</label>

		@if($errors->has('password'))
			<span>{{ $errors->first('password') }}</span>
		@endif

		<br>

		<button type="submit">Submit</button>
		
	</form>

</body>
</html>