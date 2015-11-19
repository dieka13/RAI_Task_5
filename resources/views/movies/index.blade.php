<!DOCTYPE html>
<html>
<head>
	<title>RAI Task 5</title>
</head>
<body>
	<h1>RAI Task 5</h1>

	@section('sidebar')
	<p>Master Sidebar</p>
	@show

	<div>
		@yeild('content')
	</div>
</body>
</html>