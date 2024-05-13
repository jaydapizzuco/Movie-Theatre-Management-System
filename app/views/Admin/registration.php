<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Main/index"><?= __('Home') ?></a>
    <a class="navbar-brand" href="/Admin/login"><?= __('Login') ?></a>
  </div>
</nav>

<body class="body">
	<div class='container'>
		<br><h1><?= __('Create a New Administrator Account') ?></h1>
		<form method='post' action=''>
			<div class="form-group">
				<label><?= __('Username:') ?><input type="text" class="form-control" name="username" placeholder="<?= __('username')?>" /></label>
			</div>
			<div class="form-group">
				<label><?= __('Email:')?><input type="text" class="form-control" name="email" placeholder="<?= __('email')?>" /></label>
			</div>
			<div class="form-group">
				<label><?= __('Password:') ?><input type="password" class="form-control" name="password" placeholder="<?= __('password')?>" /></label>
			</div>

			<br><div class="form-group">
				<input type="submit" name="action" value="<?= __('Register') ?>" /><br><br> 
			</div>
		</form>

		<form action="/Admin/login">
    		<input type="submit" value="<?= __('I have an account, bring me to the login page') ?>" />
		</form>
	</div>
</body>
</html>