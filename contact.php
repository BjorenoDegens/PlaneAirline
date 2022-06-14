<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="contact-form.css" rel="stylesheet">
  </head>

<body>

<header>
    <div class="box-left">
      <img class = "logo" src ="Afbeeldingen/Officieel_logo_CRUD_-removebg-preview.png" alt="">
        
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
<main>
  <div class="container-contact">
    <div id="contact" class="section1">
      <div class="form-btn2">
      <a class="pijltje-terug" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
              <div class="fcf-body">
                  <div id="fcf-form">
                    <h3 class="fcf-h3">Contacteer ons</h3>

                  <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
                      
                      <div class="fcf-form-group">
                          <label for="Name" class="fcf-label">Uw Voornaam en Achternaam</label>
                          <div class="fcf-input-group">
                              <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                          </div>
                      </div>

                      <div class="fcf-form-group">
                          <label for="Email" class="fcf-label">Uw E-Mail Adres</label>
                          <div class="fcf-input-group">
                              <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                          </div>
                      </div>

                      <div class="fcf-form-group">
                          <label for="Message" class="fcf-label">Type hier uw bericht</label>
                          <div class="fcf-input-group">
                              <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                          </div>
                      </div>

                      <div class="fcf-form-group">
                          <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Verstuur Bericht</button>
                      </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</main>
</body>
</html>