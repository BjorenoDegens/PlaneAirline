<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Boek uw vlucht</title>

	<!-- Google font -->

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
    



	<header>
		<div class="box-left">
		  <img class = "logo"  src = "Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png" alt="">
			
		</div>
		<div class="box-main">
		  <div class="box">
			<div class="text">
				<div class="form-btn">
<<<<<<< HEAD:reserveer.php
					<a class="submit-btn1" href="overons.php" target="_parent" rel="nofollow">	Over ons </a>
				</div>
				<div class="form-btn">
					<a class="submit-btn1" href="contact.php" target="_parent" rel="nofollow"> Informatie over locaties  </a>
				</div>
			  <div class="form-btn">
				<a class="submit-btn1" href="contact.php" target="_parent" rel="nofollow">Contact</a>
=======
					<a class="submit-btn1" href="overons.html" target="_parent" rel="nofollow">	Over ons </a>
				</div>
				<div class="form-btn">
					<a class="submit-btn1" href="contact.html" target="_parent" rel="nofollow"> Informatie over locaties  </a>
				</div>
			  <div class="form-btn">
				<a class="submit-btn1" href="contact.html" target="_parent" rel="nofollow">Contact</a>
>>>>>>> c3da689fa8c797e67f26cb894d89c7776493018e:reserveer.html
			</div>
			</div>
		  </div>
		</div>
		<div class="box-right">
		  <div class="box">
			<div class="search">
			  <div class="icon"></div>
				<div class="input">
				  <input type="text" placeholder="Zoeken" id="mysearch" />
				</div>
			  <span
			  class="clear"
			  onclick="document.getElementById
			  ('mysearch').value = ''"></span>
		  </div>
		  <script>
			const icon = document.querySelector(".icon");
			const search = document.querySelector(".search");
			icon.addEventListener("click", () => {
			  search.classList.toggle("active");
			});
		  </script>
		  </div>
		  <div class="box"> 
			<div class="box-logo-login">
				<a href = "inlog.php"> <img src="Afbeeldingen/user-icon-png-transparent-17.jpg"  target="_parent" alt=""></a>
			   </div>
		  </div>
		</div>
	  </header> 



	<div id="booking" class="section">
        <div class="form-btn">
<<<<<<< HEAD:reserveer.php
            <a class="submit-btn" href="index.php" target="_parent" rel="nofollow">Vlieg Terug Naar HomePage</a>
=======
            <a class="submit-btn" href="index.html" target="_parent" rel="nofollow">Vlieg Terug Naar HomePage</a>
>>>>>>> c3da689fa8c797e67f26cb894d89c7776493018e:reserveer.html
        </div>
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Boek uw vlucht</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
                            <img src="Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png" alt="">
<<<<<<< HEAD:reserveer.php
							<form action="php/inlogcheck.php" method="post">
=======
							<form>
>>>>>>> c3da689fa8c797e67f26cb894d89c7776493018e:reserveer.html
								<div class="form-group">
									<span class="form-label">Uw bestemming</span>
									<input class="form-control" type="text" placeholder="Voer uw vliegbestemming in">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Vertrek</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Aankomst terug</span>
											<input class="form-control" type="date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Vliegveld</span>
											<select class="form-control">
												<option>Schiphol</option>
												<option>Eindhoven</option>
												<option>Rotterdam</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Volwassenen</span>
											<input class="form-control"></input>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Kinderen</span>
											<input class="form-control"></input>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
<<<<<<< HEAD:reserveer.php
									<button class="submit-btn" type="submit" name="reserveer">Reserveer</button>
=======
									<a class="submit-btn" href="/registeer.html">Reserveer</a>
>>>>>>> c3da689fa8c797e67f26cb894d89c7776493018e:reserveer.html
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>