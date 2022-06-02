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
              <a
                class="submit-btn1"
                href="overons.php"
                target="_parent"
                rel="nofollow"
              >
                Over ons
              </a>
            </div>
            <div class="form-btn">
              <a
                class="submit-btn1"
                href="contact.php"
                target="_parent"
                rel="nofollow"
              >
                Informatie over locaties
              </a>
            </div>
            <div class="form-btn">
              <a
                class="submit-btn1"
                href="contact.php"
                target="_parent"
                rel="nofollow"
                >Contact</a
              >
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
      <div class="form-btn">
        <a class="submit-btn" href="index.php" target="_parent" rel="nofollow"
          >Vlieg Terug Naar HomePage</a
        >
      </div>
      

      <h2 style="text-align: center">Ons Team</h2>
      <div class="row-overons">
        <div class="column">
          <div class="card-overons">
            <img
              src="Afbeeldingen/IMG_20210504_1012521542.jpg"
              alt="Jane"
              style="width: 100%"
            />
            <div class="container-overons">
              <h2>Bjoreno Degens</h2>
              <p class="title">Software Developer Backend</p>
              <p>Info over persoon</p>
              <p>bjoreno@gmail.com</p>
              <div class="button-overons">
                <button
                  type="submit"
                  id="fcf-button"
                  class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block"
                >
                  Verstuur Bericht
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card-overons">
            <img
              src="Afbeeldingen/IMG_4262.jpg"
              alt="Mike"
              style="width: 100%"
            />
            <div class="container-overons">
              <h2>Gavin Tetteroo</h2>
              <p class="title">Software Developer Frontend</p>
              <p>Info over persoon.</p>
              <p>gavin@gmail.com</p>
              <div class="button-overons">
                <button
                  type="submit"
                  id="fcf-button"
                  class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block"
                >
                  Verstuur Bericht
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card-overons">
            <img
              src="Afbeeldingen/79DB0451-617E-454E-AFF8-7FD73E92F3F9.jpg"
              alt="John"
              style="width: 100%"
            />
            <div class="container-overons">
              <h2>Suhaayb Ahmed</h2>
              <p class="title">Software Developer Frontend</p>
              <p>Info over persoon.</p>
              <p>suhaayb@gmail.com</p>
              <div class="button-overons">
                <button
                  type="submit"
                  id="fcf-button"
                  class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block"
                >
                  Verstuur Bericht
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row-tussen">
        <br />
      </div>
      <br />
      <h2 style="text-align: center">Ons Bedrijf</h2>
      <br />
      <div class="bedrijfs-image">
        <img
          src="Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png"
          alt=""
        />
      </div>

      <div class="overons-text">
        <h2 style="text-align: center">
          PlaneAirline
          <br />
          <br />
          Is opgericht door Gavin Tetteroo, Bjoreno Degens & Suhaayb Ahmed.
          <br />
          <br />
          PlaneAirline beschikt u van de beste, veiligste en goedkoopste
          vluchten in Nederland. Onze Luchtmachtmaatschappij beschikt over
          topklasse personeel en hoog getrainde piloten en stewardessen die u
          uiterste service kunnen dienen tijdens uw vlucht.
        </h2>
      </div>
    </main>
  </body>
</html>
