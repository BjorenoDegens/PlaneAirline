<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
<header>
      <div class="box-left">
        <img
          class="logo"
          src="Afbeeldingen\Officieel_logo_CRUD_-removebg-preview.png"
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
            /></a>
          </div>
        </div>
      </div>
    </header>
  <div class="container-info">
    <a class="pijltje-terug" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
    <div class="card-grid">
          <div class="box-up-moreleft">
            <div class="card card-shadow">
              <div class="card-header card-image">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=pisa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
                </div>
              </div>
              </div>
              <div class="card-body">
                <p>Italië</p>
              </div>
              <div class="card-footer">
                <button type="button" class="opklappen">Meer informatie</button>
                <div class="inhoud" style="display:none;">
                <p>De klokkentoren van Pisa
                  Deze toren kennen we allemaal wel, van horen of van zien. De toren van Pisa in het plaatsje Pisa! Kenmerkend aan deze vrijstaande klokkentoren is de scheefstand. Het blijft een wonderlijke beleving zo'n grote, scheve toren. Altijd leuk dus om hier een grappig kiekje van te schieten! </p>
              </div>
              </div>
            </div>
          </div>
          <div class="card-grid">
          <div class="box-up-left" style="display: flex;">
            <div class="card card-shadow">
              <div class="card-header card-image">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=lelystad%20airport&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
              </div></div> </div>
              
              <div class="card-body">
                <p>Lelystad Airport</p>
               
              </div>
              <div class="card-footer" >
              <button type="button" class="opklappen">Meer informatie</button>
                <div class="inhoud" style="display:none;">
                <p> Dit is de #25ste meest bezochte vliegveld in Nederland. De adress ervan is Arendweg 7, 8218 PE Lelystad.</p>
              </div>
              </div>
            </div>
          </div>
          <div class="card-grid">
          <div class="box-up-left" style="display: flex;">
            <div class="card card-shadow">
              <div class="card-header card-image">
              <iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=schiphol%20amsterdam&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              <a href="https://fmovies-online.net"></a><br>
              </div>
              <div class="card-body">
                <p>Amsterdam Schiphol</p>
              </div>
              <div class="card-footer">
              <button type="button" class="opklappen">Meer informatie</button>
                <div class="inhoud" style="display:none;">
                <p>Dit is de #1 meest bezochte vliegveld in Nederland. De adress ervan is Evert van de Beekstraat 202, 1118 CP Schiphol.</p>
              </div>
              </div>
            </div>
          </div>
          </div>
          <div class="card-grid">
            <div class="box-up-left" style="display: flex;">
              <div class="card card-shadow">
                <div class="card-header card-image">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=lelystad%20airport&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
                </div></div> </div>
                
                <div class="card-body">
                  <p>Lelystad Airport</p>
                 
                </div>
                <div class="card-footer" >
                <button type="button" class="opklappen">Meer informatie</button>
                  <div class="inhoud" style="display:none;">
                  <p> Dit is de #25ste meest bezochte vliegveld in Nederland. De adress ervan is Arendweg 7, 8218 PE Lelystad.</p>
                </div>
                </div>
              </div>
            </div>
<script>
  var coll = document.getElementsByClassName("opklappen");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script> 
</body>
</html>