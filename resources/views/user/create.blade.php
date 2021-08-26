<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create a user</title>
</head>
<body>
	<form action="/users" method="post">
		@method('DELETE')
		@csrf
		Name: <input type="text"><br><br>
		<input type="submit" value="Submit">
	</form>
	<a href="{{ route('kicu'); }}">Click here</a>
</body>
</html>