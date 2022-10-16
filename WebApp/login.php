<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Log in</title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />

	<link rel="stylesheet" href="assets/css/style-login.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="shell">
			<div class="header__container">
				<a href="index.php" class="logo">
					<img src="assets/images/logo.png" alt="" width="595" height="311">
				</a><!-- /.logo -->

				<nav class="nav">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
					</ul>
				</nav><!-- /.nav -->
			</div><!-- /.header__container -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	<div class="section-login">
		<div class="shell">
			<div id="login" class="login">
				<header class="login__head">
					<h2>SIGN IN:</h2>
				</header><!-- /.login__head -->

				<form>
					<div class="login__content">
						<div class="grid__row">
							<input id="loge" type="text" name="email" class="area" placeholder="Email">
						</div><!-- /.grid__row -->
						
						<div class="grid__row">
							<input id="logp" type="password" name="pass" class="area" placeholder="Password">
						</div><!-- /.grid__row -->

						<div class="grid__row">
							<button onclick="login()" class="btn btn--signup">SIGN IN</button>
						</div><!-- /.grid__row -->
						<p class="switch"><strong id="switch">Don`t have an account?</strong></p>
					</div><!-- /.login__content -->
				</form>
			</div><!-- /.login -->

			<div id="register" class="register hidden">
				<header class="register__head">
					<h2>SIGN UP:</h2>
				</header><!-- /.login__head -->

				<form>
					<div class="register__content">
						<div class="grid__row">
							<input id="regn" type="text" name="name" class="area" placeholder="Name">
						</div><!-- /.grid__row -->

						<div class="grid__row">
							<input id="rege" type="text" name="email" class="area" placeholder="Email">
						</div><!-- /.grid__row -->
						
						<div class="grid__row">
							<input id="regp" type="password" name="pass" class="area" placeholder="Password">
						</div><!-- /.grid__row -->

						<div class="grid__row">
							<button onclick="register()" class="btn btn--signup">SIGN UP</button>
						</div><!-- /.grid__row -->
						<p class="switch"><strong id="switch">Have an account?</strong></p>
					</div><!-- /.login__content -->
				</form>
			</div><!-- /.login -->
		</div><!-- /.shell -->
	</div><!-- /.section-login -->

	<script type="text/javascript" src="assets/js/queries.js"></script>
</body>
</html>