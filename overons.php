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
              <a class="submit-btn1" href="infolocatie.php" target="_parent" rel="nofollow"> Informatie over locaties  </a>
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
      <a class="pijltje-terug" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
      </div>
      

      <h2 style="text-align: center">Ons Team</h2>
      <div class="row-overons">
        <div class="card-flip">
          <div class="front">
              <div class="box-up-moreright">
                  <div class="card card-shadow">
                    <div class="card-header card-image">
                      <img src="Afbeeldingen/IMG_20210504_1012521542.jpg" />
                    </div>
                    <div class="card-footer">
                      <a
                        class="btn btn-outline"
                        href="reserveer.php"
                        target="_parent"
                        >Contacteren</a>
                    </div>
                  </div>
                </div>
          </div>
          
          <div class="back">
              <div class="box-up-moreright">
                  <div class="card card-shadow-back">
                    <div class="card-header card-image">
                      <img src="Afbeeldingen/IMG_20210504_1012521542.jpg" />
                    </div>
                    <div class="card-body-back">
                      <h1>Bjoreno Degens</h1>
                      <h2>Software Developer</h2>
                      <h3>Back-end Developer op ROC Nijmegen</h3>
                    </div>
  
                      <div class="card-footer-back">
                          <a
                            class="btn btn-outline"
                            href="reserveer.php"
                            target="_parent"
                            >Contacteren</a>
                        </div>
                    </div>
          </div>
       </div>
       </div>
          <div class="card-flip">
            <div class="front">
                <div class="box-up-moreright">
                    <div class="card card-shadow">
                      <div class="card-header card-image">
                        <img src="Afbeeldingen/IMG_4262.jpg" />
                      </div>
                      <div class="card-footer">
                        <a
                          class="btn btn-outline"
                          href="reserveer.php"
                          target="_parent"
                          >Contacteren</a>
                      </div>
                    </div>
                  </div>
            </div>
            
            <div class="back">
                <div class="box-up-moreright">
                    <div class="card card-shadow-back">
                      <div class="card-header card-image">
                        <img src="Afbeeldingen/IMG_4262.jpg" />
                      </div>
                      <div class="card-body-back">
                        <h1>Gavin Tetteroo</h1>
                        <h2>Software Developer</h2>
                        <h3>Front-end Developer op ROC Nijmegen</h3>
                      </div>
    
                        <div class="card-footer-back">
                            <a
                              class="btn btn-outline"
                              href="reserveer.php"
                              target="_parent"
                              >Contacteren</a>
                          </div>
                      </div>
            </div>
         </div>
         </div>
  
        
          <div class="card-flip">
            <div class="front">
                <div class="box-up-moreright">
                    <div class="card card-shadow">
                      <div class="card-header card-image">
                        <img src="Afbeeldingen/79DB0451-617E-454E-AFF8-7FD73E92F3F9.jpg" />
                      </div>
                      <div class="card-footer">
                        <a
                          class="btn btn-outline"
                          href="reserveer.php"
                          target="_parent"
                          >Contacteren</a>
                      </div>
                    </div>
                  </div>
            </div>
            
            <div class="back">
                <div class="box-up-moreright">
                    <div class="card card-shadow-back">
                      <div class="card-header card-image">
                        <img src="Afbeeldingen/79DB0451-617E-454E-AFF8-7FD73E92F3F9.jpg" />
                      </div>
                      <div class="card-body-back">
                        <h1>Bjoreno Degens</h1>
                        <h2>Software Developer</h2>
                        <h3>Back-end Developer op ROC Nijmegen</h3>
                      </div>
    
                        <div class="card-footer-back">
                            <a
                              class="btn btn-outline"
                              href="reserveer.php"
                              target="_parent"
                              >Contacteren</a>
                          </div>
                      </div>
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
