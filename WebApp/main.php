<?php

session_start();
$name = $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Main Page</title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />

	<link rel="stylesheet" href="assets/css/style-main.css" />

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

						<li>
							<a href="#">Profile</a>
						</li>

						<li>
							<a href="index.php" onclick="">Log out</a>
						</li>
					</ul>
				</nav><!-- /.nav -->
			</div><!-- /.header__container -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	<section class="section-features">
		<div class="shell">
			<h1>Welcome back, <em><?php echo $name; ?></em>!</h1>

			<div class="grid__row">
				<div class="grid">
					<div class="grid__col grid__col--1of4">
						<div class="buble">
							<header class="buble__head">
								<h3>Tasks done:</h3>
							</header><!-- /.buble__head -->

							<div class="buble__content">
								<p>2</p>
							</div><!-- /.buble__content -->
						</div><!-- /.buble -->
					</div><!-- /.grid__col-/-1of4 -->

					<div class="grid__col grid__col--1of4">
						<div class="buble">
							<header class="buble__head">
								<h3>Tasks left:</h3>
							</header><!-- /.buble__head -->

							<div class="buble__content">
								<p>3</p>
							</div><!-- /.buble__content -->
						</div><!-- /.buble -->
					</div><!-- /.grid__col-/-1of4 -->

					<div class="grid__col grid__col--1of2">
						<div class="buble">
							<header class="buble__head">
								<h3>Your current task:</h3>
							</header><!-- /.buble__head -->

							<div class="buble__content buble__content--fonts">
								<p>Finish my final research project about the different kinds of penguins in Antarctica.</p>
							</div><!-- /.buble__content -->
						</div><!-- /.buble -->
					</div><!-- /.grid__col-/-1of4 -->
				</div><!-- /.grid -->
			</div><!-- /.grid__row -->

			<div class="grid__row">
				<label class="switchimp">
				  <input type="checkbox">
				  <span class="slider round"></span>
				</label>

				<h3>Turn on auto - priority system</h3>
			</div><!-- /.grid__row -->

			<div class="grid__row">
				<div class="grid grid--tables">
					<div class="grid__col grid__col--1of3">
						<div class="table">
							<table>
								<tr>
									<th colspan="5">TO BE DONE</th>
								</tr>

								<tr>
									<th>#</th>
									<th>Task Title</th>
									<th>Task Describtion</th>
									<th>Deadline</th>
									<th>Priority</th>
								</tr>
								
								<tr>
									<td>1</td>
									<td>Research</td>
									<td>Finish my final research project about the different kinds of penguins in Antarctica. </td>
									<td>10/16/2022</td>
									<td><div class="red"></div><!-- /.red --></td>
								</tr>

								<tr>
									<td>2</td>
									<td>Plants</td>
									<td>Water the plants on the balcony soon.</td>
									<td>10/17/2022</td>
									<td><div class="green"></div><!-- /.red --></td>
								</tr>
							</table>
						</div><!-- /.table -->

						<div class="addtask">
							<div class="add-button"></div><!-- /.add-button -->
						</div><!-- /.addtask -->
					</div><!-- /.grid__col grid__col-/-1of3 -->
					
					<div class="grid__col grid__col--1of3">
						<div class="table">
							<table>
								<tr>
									<th colspan="5">IN PROGRESS</th>
								</tr>

								<tr>
									<th>#</th>
									<th>Task Title</th>
									<th>Task Describtion</th>
									<th>Deadline</th>
									<th>Priority</th>
								</tr>
								
								<tr>
									<td>1</td>
									<td>Cat</td>
									<td>Feed Mr. Cuddles and change the sand in his box. </td>
									<td>10/16/2022</td>
									<td><div class="yellow"></div><!-- /.red --></td>
								</tr>
							</table>
						</div><!-- /.table -->

						<div class="addtask">
							<div class="add-button"></div><!-- /.add-button -->
						</div><!-- /.addtask -->
					</div><!-- /.grid__col grid__col-/-1of3 -->
					
					<div class="grid__col grid__col--1of3">
						<div class="table">
							<table>
								<tr>
									<th colspan="5">FINISHED</th>
								</tr>

								<tr>
									<th>#</th>
									<th>Task Title</th>
									<th>Task Describtion</th>
									<th>Deadline</th>
									<th>Remove</th>
								</tr>
								
								<tr>
									<td>1</td>
									<td>Report</td>
									<td>Send Mr. Swanson the weekly financial report.</td>
									<td>10/16/2022</td>
									<td>Remove</td>
								</tr>

								<tr>
									<td>2</td>
									<td>Lightbulb</td>
									<td>Replace the lightbulb in the bathroom and the kitchen with new ones.</td>
									<td>10/16/2022</td>
									<td>Remove</td>
								</tr>
							</table>
						</div><!-- /.table -->

						<div class="addtask">
							<div class="add-button"></div><!-- /.add-button -->
						</div><!-- /.addtask -->
					</div><!-- /.grid__col grid__col-/-1of3 -->
				</div><!-- /.grid -->
			</div><!-- /.grid__row -->
		</div><!-- /.shell -->
	</section><!-- /.section -->
</body>
</html>