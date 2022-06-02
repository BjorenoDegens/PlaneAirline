<?php
session_start();
$message="";

if (isset($_GET['message'])) {
  if ($_GET['message'] == 'problem')
  {
    $message="neem contact op met de servicedesk";
  }
  else if ($_GET['message'] == 'invalid')
  {
    $message="Onjuiste gebruikersnaam en/of wachtwoord!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
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
					<a class="submit-btn1" href="overons.php" target="_parent" rel="nofollow">	Over ons </a>
				</div>
				<div class="form-btn">
					<a class="submit-btn1" href="contact.php" target="_parent" rel="nofollow"> Informatie over locaties  </a>
				</div>
			  <div class="form-btn">
				<a class="submit-btn1" href="contact.php" target="_parent" rel="nofollow">Contact</a>
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
      </div>
      <div class="box"> 
        <div class="box-logo-login">
         <a href = "inlog.php"> <img src="Afbeeldingen/user-icon-png-transparent-17.jpg"  target="_parent" alt=""></a>
        </div>
      </div>
    </div>
  </header> 
  <main>
    <div class="container-login"> 
      <div class="form-btn3">
          <a class="submit-btn3" href="index.php" target="_parent" rel="nofollow">Vlieg Terug Naar HomePage</a>
      </div>  
        <form class="login-pagina" method="post" action="php/inlogcheck.php">
            <h3>Login hier</h3>

            <label class="label-fout" for="inlog-fout"><?php if($message!="") { echo $message; } ?></label>

            <label class="label-login" >Gebruikersnaam:</label>
            <input class="input-login" name="name" type="text" placeholder="Voer hier uw Gebruikersnaam in" id="username">

            <label class="label-login" >Wachtwoord:</label>
            <input class="input-login" type="password" name="password" placeholder="Voer hier uw Wachtwoord in" id="password">

            <button class="button-login" type="submit" name="inloggen">Inloggen</button>
            <button class="button-vergeten">Wachtwoord vergeten</button>
            <button class="button-registeer" name="registeer">Registreer hier</button>
        </form>
      </div>
      </main>
  </body>
</html>