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
			nama
			<input type="text" name="name">
		</label>

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