<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/registeer.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="box-left">
        <img
          class="logo"
          src="Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png"
          alt=""
        />
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
            ('mysearch').value = ''"
            ></span>
          </div>
        </div>
        <div class="box">
          <div class="box-logo-login">
            <a href="inlog.php"
              ><img
                src="Afbeeldingen/user-icon-png-transparent-17.jpg"
                target="_parent"
                alt=""
            /><?php if(isset($_POST['name'])) echo $_SESSION["name"]?></a>
          </div>
        </div>
      </div>
    </header>

    <main>
            <div class="main-block">
              <div class="form-btn">
              <a class="pijltje-terug" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
            </div>
              <div class="left-part">
                <i class="fas fa-graduation-cap"></i>
                
              </div>
              <form action="php/crud.php" method="post">
                <div class="title">
                  <i class="fas fa-pencil-alt"></i> 
                  <h2>Wachtwoord vergeten</h2>
                </div>
                <div class="info">
                  <input type="text" name="email" placeholder="E-mail..">
                  <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam..">
                  <input type="password" name="password" placeholder="Wachtwoord..">
                  <input type="password" name="password" placeholder="Herhaal wachtwoord..">
                </div>
                <button type="submit" name="forgot">Wachtwoord bevestigen</button>
              </form>
            </div>
    </main>
    </body>
    </html>