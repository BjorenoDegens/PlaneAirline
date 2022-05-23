<?php 
$message="";
$PageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
if ($PageUrl == 'http://localhost/CRUD%20p4/PlaneAirline/php/inlog.php'){
    $message="";
} else {
    $message="Invalid Username or Password!";
}
?>
<<<<<<< HEAD
<html>
<<<<<<< HEAD
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="inlogcheck.php" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="login" value="Submit">

</form> 
</form>

</body>
=======
    <head>
        <title>User Login</title>
    </head>
    <body>
        <form name="frmUser" method="post" action="inlogcheck.php" align="center">
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <h3 align="center">Enter Login Details</h3>
    Username:<br>
    <input type="text" name="name">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" name="login" value="Submit">
    </form>
    </body>
>>>>>>> ce347e78b903dc47f2e3e9261430d8552f75c178
=======
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
      <img class = "logo"  src = "/Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png" alt="">

    </div>
    <div class="box-main">
      <div class="box">
        <div class="text">
          <p> Over Ons - </p>
          <p> Informatie over locaties - </p>
          <p></p>
          <div class="form-btn">
            <a class="submit-btn1" href="./contact.html" target="_parent" rel="nofollow">Contact</a>
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
         <a href = "inlog.html"> <img src="/Afbeeldingen/user-icon-png-transparent-17.jpg"  target="_parent" alt=""></a>
        </div>
      </div>
    </div>
  </header> 
  <main>
  <div class="container-login">
    <div class="form-btn3">
        <a class="submit-btn3" href="./index.html" target="_parent" rel="nofollow">Vlieg Terug Naar HomePage</a>
    </div>
      <div class ="background2">
          <div class="shape2"></div>
          <div class="shape2"></div>
      </div>
      <form class ="login-pagina" methode="post" action="/php/inlogcheck.php">
          <h3>Login hier</h3>

          <label class="label-fout" for="inlog-fout"><?php if($message!="") { echo $message; } ?></label>

          <label class="label-login" name="name">Gebruikersnaam:</label>
          <input class="input-login" name="name" type="text2" placeholder="Voer hier uw Gebruikersnaam in" id="username">

          <label class="label-login" name="password">Wachtwoord:</label>
          <input class="input-login" name="password" placeholder="Voer hier uw Wachtwoord in" id="password">

          <button class="button-login" name="submit">Inloggen</button>
          <button class="button-vergeten">Wachtwoord vergeten</button>
          <button class="button-registeer">Registreer hier</button>
      </form>
    </main>
  </div>
</div>
</div>
  </body>
>>>>>>> bcf59b816800586bb55ba04098bbc354fd531799
</html>