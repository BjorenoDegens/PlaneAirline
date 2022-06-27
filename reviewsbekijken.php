<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reviewsbekijken.css">
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
            <a class="submit-btn1" href="infolocatie.php" target="_parent" rel="nofollow"> Informatie over locaties  </a>
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
            /><?php if(isset($_POST['name'])) echo $_SESSION["name"];?></a>	
          </div>
        </div>
      </div>
    </header>
    <main>
      <a class="pijltje-terug" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
        <div class="container-reviews">
                <div class="reviewbox">
                    <div class="datum">19-06-2005</div>
                    <div class="container-reviews-main">
                        <p>Naam locatie: Italië
                            <br>
                            <br>
                            Review: Hopelijk klopt deze tekst in het vakje hoe ik het wil hebben anders word ik boos :)
                        </p>
                    </div>
                  </div>
                </div>
                <div class="reviewbox">
                  <div class="datum">19-06-2005</div>
                  <div class="container-reviews-main">
                      <p>Naam locatie: Spanje
                          <br>
                          <br>
                          Review: Hopelijk klopt deze tekst in het vakje hoe ik het wil hebben anders word ik boos :)
                      </p>
                  </div>
                </div>
        </div>
    </main>
</body>
</html>
