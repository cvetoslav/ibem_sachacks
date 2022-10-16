<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Home page</title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png" />

	<link rel="stylesheet" href="assets/css/style.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<header class="header">
		<div class="shell">
			<div class="header__container">
				<a href="#" class="logo">
					<img src="assets/images/logo.png" alt="" width="595" height="311">
				</a><!-- /.logo -->

				<nav class="nav">
					<ul>
						<li>
							<a href="#">Home</a>
						</li>

						<li>
							<a href="#team">The Team</a>
						</li>

						<li>
							<a href="#contacts">Contacts</a>
						</li>

						<li>
							<a href="login.php">Sign up</a>
						</li>
					</ul>
				</nav><!-- /.nav -->
			</div><!-- /.header__container -->
		</div><!-- /.shell -->
	</header><!-- /.header -->

	<section class="hero">
		<div class="shell">
			<div class="hero__wrapper">
				<div class="hero__content">
					<h1>how to solve disorganisation?</h1>

					<div class="hero__content-actions">
						<a href="login.php" class="btn btn--signup">sign up</a>

						<a href="#about" class="btn btn--signup">about</a>
					</div><!-- /.hero__content-actions -->
				</div><!-- /.hero__content -->

				<div class="hero__check">
					
				</div><!-- /.hero__image -->
			</div><!-- /.hero__wrapper -->
		</div><!-- /.shell -->
	</section><!-- /.hero -->

	<section id="team" class="section-team">
		<div class="shell">
			<header class="section__head">
				<h2>OUR TEAM</h2>
			</header><!-- /.section__head -->

			<div class="section__content">
				<ul class="team-list">
					<li class="team__member">
						<div class="team__member-content">
							<figure class="team__image">
								<img src="assets/images/tm.png" alt="" width="670" height="662">
							</figure><!-- /.team__image -->

							<div class="team__info">
								<p><strong>NAME: </strong> Tsvetoslav Mavrodiev</p>
								<p><strong>AGE: </strong> 19 years old</p>
								<p><strong>FROM: </strong> Bulgaria</p>
							</div><!-- /.team__info -->
						</div><!-- /.team__member-content -->
					</li>

					<li class="team__member">
						<div class="team__member-content">
							<figure class="team__image">
								<img src="assets/images/dp.png" alt="" width="654" height="653">
							</figure><!-- /.team__image -->

							<div class="team__info">
								<p><strong>NAME: </strong> Dimitar Pandev</p>
								<p><strong>AGE: </strong> 19 years old</p>
								<p><strong>FROM: </strong> Bulgaria</p>
							</div><!-- /.team__info -->
						</div><!-- /.team__member-content -->
					</li>

					<li class="team__member">
						<div class="team__member-content">
							<figure class="team__image">
								<img src="assets/images/id.png" alt="" width="846" height="841">
							</figure><!-- /.team__image -->

							<div class="team__info">
								<p><strong>NAME: </strong> Ivan Dimitrov</p>
								<p><strong>AGE: </strong> 19 years old</p>
								<p><strong>FROM: </strong> Bulgaria</p>
							</div><!-- /.team__info -->
						</div><!-- /.team__member-content -->
					</li>

					<li class="team__member">
						<div class="team__member-content">
							<figure class="team__image">
								<img src="assets/images/hd.png" alt="" width="473" height="439">
							</figure><!-- /.team__image -->

							<div class="team__info">
								<p><strong>NAME: </strong> Hristo Denev</p>
								<p><strong>AGE: </strong> 19 years old</p>
								<p><strong>FROM: </strong> Bulgaria</p>
							</div><!-- /.team__info -->
						</div><!-- /.team__member-content -->
					</li>
				</ul>
			</div><!-- /.section__content -->
		</div><!-- /.shell -->
	</section><!-- /.section -->

	<section id="about" class="section-about">
		<div class="shell">
			<div class="section__wrapper">
				<div class="section__split"></div><!-- /.section__split -->
				
				<header class="section__head">
					<h2>ABOUT</h2>
				</header><!-- /.section__head -->

				<div class="section__content">
					<h3>What is the IBEM GO smart organizer?</h3>

					<p>Nowadays every single person has the ultimate task to set up their schedule so that all the tasks can be done optimally. The IBEM Go organizer has the purpose to help people set up their schedule at the most optimal way, characterizing the level of occupation of every single user. With the help of AI, pre-trained with a specially selected set of tasks developed specially for the task, the organizer can analyze level of priority and successfulness of every task and become the perfect helper for every user – from a high school student, to a business woman, pursuing a successful career and taking care of her two kids.</p>


					<h3 class="heading-next">Future development</h3>

					<p>Future tasks of our project will be implementing a model able to analyze the tasks done by the user which will be able to later calculate the average time needed to complete a given task. In our planned task list is also creating a feature whose task will be to reorganize the schedule so that it is optimal. A future goal is for the organizer to be able to extract tasks from emails. The ML-processed data can be additionally processed and grouped by the clustering algorithms to categorize the tasks. We will use a custom and optimized version of the k-means algorithm, as it is one of the most efficient well-known methods to group data in clusters.</p>
				</div><!-- /.section__content -->
			</div><!-- /.section__wrapper -->
		</div><!-- /.shell -->
	</section><!-- /.section-about -->

	<section id="contacts" class="section-contacts">
		<div class="shell">
			<div class="section__split"></div><!-- /.section__split -->
				
			<header class="section__head">
				<h2>CONTACTS</h2>
			</header><!-- /.section__head -->

			<div class="section__content">
				<form action="?" method="post">
					<div class="grid">
						<div class="grid__col--1of2">
							<div class="grid__row">
								<input type="text" name="name" class="area" placeholder="Name">
							</div><!-- /.grid__row -->

							<div class="grid__row">
								<input type="text" name="email" class="area" placeholder="Email">
							</div><!-- /.grid__row -->

							<div class="grid__row">
								<textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
							</div><!-- /.grid__row -->

							<div class="grid__row">
								<input class="btn btn--signup btn--submit" type="submit" name="submit" value="contact us">
							</div><!-- /.grid__row -->
						</div><!-- /.col-/-1of2 -->
						
						<div class="grid__col--1of2">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186126.443455247!2d27.802824348891605!3d43.20475564393969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a4538baaf3d7a1%3A0x5727941c71a58b7c!2sVarna!5e0!3m2!1sen!2sbg!4v1665874909593!5m2!1sen!2sbg" class="contacts-map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div><!-- /.col-/-1of2 -->
					</div><!-- /.grid -->
				</form>
			</div>
		</div><!-- /.shell -->
	</section><!-- /.section-contacts -->

	<script type="text/javascript" src="assets/js/queries.js"></script>
</body>
</html>