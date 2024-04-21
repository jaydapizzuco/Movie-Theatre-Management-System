<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Main/index">Home</a>
  </div>
</nav>

<body>
	<div class='container'>
		<br><h1>Login as Administrator</h1>
		<form method='post' action=''>
			<div class="form-group">
				<label>Username:<input type="text" class="form-control" name="username" placeholder="username" /></label>
			</div><br>
			<div class="form-group">
				<label>Password:<input type="password" class="form-control" name="password" placeholder="password" /></label>
			</div><br>

			<div class="form-group">
				<input type="submit" name="action" value="Login" /><br> 
			</div><br>

		</form>

		<form action="/Admin/register">
    		<input type="submit" value="I have no account, bring me to the registration page" />
		</form>
	</div>

	
</body>
</html>