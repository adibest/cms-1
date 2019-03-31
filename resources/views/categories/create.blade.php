<!DOCTYPE html>
<html>
<head>
	<title>Create Category</title>
</head>
<body>

	<h3>Create Category</h3>

	<form method="post" action="{{ route('categories.store') }}">

		@csrf

		<label>
			nama
			<input type="text" name="name">
		</label>

		<br>

		<button type="submit">Submit</button>
		
	</form>

</body>
</html>