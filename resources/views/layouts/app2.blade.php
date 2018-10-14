<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

	
	


	<nav class="navbar navbar-inverse">

		<div class="navbar-header"><a href="#" class="navbar-brand">Student management</a></div>
		<ul class="nav navbar-nav">
		<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">dropdown menu</a>
				<ul class="dropdown-menu">
			 <li><a href="\view">Student List</a></li>
		 	<li><a href="\add">Add Student</a></li>
		 	<li><a href="#">Edit Student</a></li>
		 	<li><a href="#">Delete Student</a></li>
			</ul>
		</li>
		<li><a href="\view">Student List</a></li>
		 	<li><a href="\add">Add Student</a></li>
		 	<li><a href="#">Edit Student</a></li>
		 	<li><a href="#">Delete Student</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		 <li><a href="#"><span class="glyphicon glyphicon-user"></span>   product</a></li>
		 <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>   add product</a></li>
		</ul>
		    <button class="btn btn-danger navbar-btn">Button</button>
	
	</nav>

<div>
	@yield('content')
</div>
<div>
	<h1>yes it is</h1>
</div>
</body>
</html>