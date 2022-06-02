<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
            /></a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <!-- <div class="weer">
              <a class="weatherwidget-io" href="https://forecast7.com/nl/51d815d84/nijmegen/" data-label_1="NIJMEGEN" data-label_2="WEER" data-font="Arimo" data-icons="Climacons Animated" data-theme="clear" >NIJMEGEN WEER</a>
            </div>
              <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
              </script> -->

              
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img
            class="image-slideshow"
            src="Afbeeldingen/CBC_Photos6.png"
            style="width: 100%"
          />
        </div>
        <div class="mySlides fade">
          <img
            class="image-slideshow"
            src="Afbeeldingen/header-detox.jpg"
            style="width: 100%"
          />
        </div>

        <div class="mySlides fade">
          <img
            class="image-slideshow"
            src="Afbeeldingen/engin-yapici-WA1u0scVLZU-unsplash.jpg"
            style="width: 100%"
          />
        </div>




      <div class="container">
        <div class="box-main-up">
          <div class="box-up-left">
            <p>Reserveringen</p>
            <div class="button-hover-reserveer" align="center">
              <a class="button-reserveer" href="reserveer.php" target="_parent"
                >Reserveren</a
              >
            </div>
          </div>
        </div>
        <div class="card-grid">
          <div class="box-up-moreleft">
            <div class="card card-shadow">
              <div class="card-header card-image">
                <img
                  src="Afbeeldingen/damiano-baschiera-hFXZ5cNfkOk-unsplash.jpg"
                />
              </div>
              <div class="card-body">
                <p>Italië</p>
                <br />
                <p>
                  €206,99
                </p>
              </div>
              <div class="card-footer">
                <button class="btn">Info</button>
                <a
                  class="btn btn-outline"
                  href="reserveer.php"
                  target="_parent"
                  >Reserveren</a
                >
              </div>
            </div>
          </div>
          <div class="box-up-left">
            <div class="card card-shadow">
              <div class="card-header card-image">
                <img
                  src="Afbeeldingen/karol-stefanski-APjr3A0xsHM-unsplash.jpg"
                />
              </div>
              <div class="card-body">
                <p>Portugal</p>
                <br />
                <p>
                  €374,99
                </p>
              </div>
              <div class="card-footer">
                <button class="btn">Info</button>
                <a
                  class="btn btn-outline"
                  href="reserveer.php"
                  target="_parent"
                  >Reserveren</a
                >
              </div>
            </div>
          </div>
          <div class="box-up-right">
            <img src="C:\xampp\htdocs\Crud\PlaneAirline\Afbeeldingen\Vakantiefoto1.jpg" alt="">

            <div class="card card-shadow">
              <div class="card-header card-image">
                <img
                  src="Afbeeldingen/drew-dizzy-graham-cB4Uqoc9D9k-unsplash.jpg"
                />
              </div>
              <div class="card-body">
                <p>Turkije</p>
                <br />
                <p>
                  €519,99
                </p>
              </div>
              <div class="card-footer">
                <button class="btn">Info</button>
                <a
                  class="btn btn-outline"
                  href="reserveer.php"
                  target="_parent"
                  >Reserveren</a
                >
              </div>
            </div>
          </div>
          <div class="box-up-moreright">
            <div class="card card-shadow">
              <div class="card-header card-image">
                <img src="Afbeeldingen/reiseuhu-58MWgP3SsmY-unsplash.jpg" />
              </div>
              <div class="card-body">
                <p>Spanje</p>
                <br />
                <p>
                  €136,99
                </p>
              </div>
              <div class="card-footer">
                <button class="btn">Info</button>
                <a
                  class="btn btn-outline"
                  href="reserveer.php"
                  target="_parent"
                  >Reserveren</a>
              </div>
            </div>
          </div>
        </div>
        <div class="button-show">
          <button id="First">Zie meer locaties</button>
        </div>
  <block1 id="ID" class="a">
    <div class="card-grid">
      <div class="box-up-moreleft">
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img
              src="Afbeeldingen/canada.jpg"
            />
          </div>
          <div class="card-body">
            <p>Canada</p>
            <br />
            <p>
              €750,99
            </p>
          </div>
          <div class="card-footer">
            <button class="btn">Info</button>
            <a
              class="btn btn-outline"
              href="/reserveer.php"
              target="_parent"
              >Reserveren</a
            >
          </div>
        </div>
      </div>
      <div class="box-up-left">
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img
              src="Afbeeldingen/USA.jpg"
            />
          </div>
          <div class="card-body">
            <p>Amerika</p>
            <br />
            <p>
              €1066,99
            </p>
          </div>
          <div class="card-footer">
            <button class="btn">Info</button>
            <a
              class="btn btn-outline"
              href="reserveer.php"
              target="_parent"
              >Reserveren</a
            >
          </div>
        </div>
      </div>
      <div class="box-up-right">
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img
              src="Afbeeldingen/Zuid-afrika.jpg"
            />
          </div>
          <div class="card-body">
            <p>Zuid-Afrika</p>
            <br />
            <p>
              €266,99
            </p>
          </div>
          <div class="card-footer">
            <button class="btn">Info</button>
            <a
              class="btn btn-outline"
              href="reserveer.php"
              target="_parent"
              >Reserveren</a
            >
          </div>
        </div>
      </div>
      <div class="box-up-moreright">
        <div class="card card-shadow">
          <div class="card-header card-image">
            <img src="Afbeeldingen/Brazilië.jpg" />
          </div>
          <div class="card-body">
            <p>Brazilië</p>
            <br />
            <p>
              €296,99
            </p>
          </div>
          <div class="card-footer">
            <button class="btn">Info</button>
            <a
              class="btn btn-outline"
              href="reserveer.php"
              target="_parent"
              >Reserveren</a>
          </div>
        </div>
      </div>
    </div>
    <div class="button-hide">
      <button id="Sec">Zie minder locaties</button>
    </div>
  </block1>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </main>
    <script src="main.js"></script>
    <footer></footer>
  </body>
</html>
    