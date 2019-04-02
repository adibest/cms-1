<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<h3>Login Form</h3>

	<form method="post" action="{{ route('auth.login') }}">
		@csrf
		<label>
			Email :
			<input type="email" name="email">
		</label>

		<br>

		<label>
			Password :
			<input type="password" name="password">
		</label>

		<button type="submit">Submit</button>
	</form>

</body>
</html>