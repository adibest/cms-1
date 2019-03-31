<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
</head>
<body>

	<h3>Edit Category</h3>

	<form method="post" action="{{ route('categories.update', $category->id) }}">

		@csrf
		@method('PUT')

		<label>
			nama
			<input type="text" name="name" value="{{ $category->name }}">
		</label>

		<br>

		<button type="submit">Submit</button>
		
	</form>

</body>
</html>