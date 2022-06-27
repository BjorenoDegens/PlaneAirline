<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="infolocatie.css">
</head>
<body>
    <div class="main">
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
            <div class="form-btn2">
            <a class="submit-btn1" href="infolocatie.php" target="_parent" rel="nofollow"> Informatie over locaties  </a>
          </div>
            <div class="form-btn3">
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
            /><?php if(isset($_POST['name'])) echo $_SESSION["name"]?></a>
          </div>
        </div>
      </div>
    </header>
    
    <div class="main-block">
    
    <a class="pijltje-terug1" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class="scroll-text">
<a href="#purple" class="scroll" style="margin-right: 10px;">Rome</a> 
<a href="#orange" class="scroll" style="margin-right: 10px;">lissabon</a> 
<a href="#black" class="scroll" style="margin-right: 10px;">Ankara</a> 
<a href="#green" class="scroll" style="margin-right: 10px;">Madrid</a> 
<a href="#blue" class="scroll" style="margin-right: 10px;">Ottawa</a> 
<a href="#red" class="scroll" style="margin-right: 10px;">Washington</a>
<a href="#turquoise" class="scroll" style="margin-right: 10px;">Kaapstad</a>
<a href="#yellow" class="scroll" style="margin-right: 10px;">Brazilia</a>
</div>
<div class="container">
    <div id="purple" class="child-element child1">  
        <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=rome&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Rome, Italy</h2>
              
    <div id="orange" class="child-element child2">
    <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=lissabon&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Lissabon, Portugal</h2>
    </div>
    <div id="black" class="child-element child3">
    <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=istanbul&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Ankara, Turkije</h2>
    </div>
    <div id="green" class="child-element child4">
    <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=barcelona&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Madrid, Spanje</h2>
    </div>
    <div id="blue" class="child-element child5">
    <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=ottawa&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Ottawa, Canada</h2>
    </div>
    <div id="red" class="child-element child6">
    <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=Washington&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Washington, Amerika</h2>
    </div>
    <div id="turquoise" class="child-element child7">
    <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=Kaapstad&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Kaapstad, Zuid-Afrika</h2>
    </div>
    <div id="yellow" class="child-element child8">
    <div class="mapouter"><div class="gmap_canvas">
         <iframe width="250" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=Brazilia&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a><br>
              </div></div>
         
                <h2>Brazilia, Brazilië</h2>
    </div>
</div>
         </div>
         </div>
         <div class="bottom-info">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <div class="scroll-tekst">
        <a href="#Italy" class="scroll" style="margin-right: 10px;">Italy informatie</a>  <br>
        <a href="#Portugal" class="scroll" style="margin-right: 10px;">Portugal informatie</a> 
        <a href="#Turkije" class="scroll"style="margin-right: 10px;">Turkije informatie</a> 
        <a href="#Spanje" class="scroll"style="margin-right: 10px;">Spanje informatie</a> 
        <a href="#Canada" class="scroll"style="margin-right: 10px;">Canada informatie</a> 
        <a href="#Amerika" class="scroll"style="margin-right: 10px;">Amerika informatie</a>
        <a href="#Zuid-Afrika" class="scroll"style="margin-right: 10px;">Zuid-Afrika informatie</a>
        <a href="#Brazilië" class="scroll"style="margin-right: 10px;">Brazilië informatie</a> 
        </div>
        <div class="container2">
    <div id="Italy-info" class="kind-element kind1">
    
    <p> De klokkentoren van Pisa <br>
                  Deze toren kennen we allemaal wel,  <br>van horen of van zien.  <br>
                  De toren van Pisa in het plaatsje Pisa!  <br>
                  Kenmerkend aan deze vrijstaande  <br>klokkentoren is de scheefstand.  <br>
                  Het blijft een wonderlijke  <br>beleving zo'n grote, scheve toren. <br> Altijd leuk dus om hier een grappig  <br>kiekje van te schieten!</p>
    <div id="Portugal" class="kind-element kind2">

    <p> Het Castelo de São Jorge, <br> ook wel het Kasteel van Sint Joris. <br> Is het bekendste kasteel van Lissabon. <br>
        Het ligt op de hoogste heuvel van de  <br>stad en kijkt uit over Rio Tejo. <br>
        Het is een van de bekendste  <br>toeristische attracties van Lissabon. <br>
        De fundamenten van het kasteel  <br>stammen al uit de 6e eeuw voor <br> Christus. 
        In 1147 werd het kasteel <br>tijdens  het Beleg van Lissabon op de <br>Moren  veroverd.</p>
    </div>
    <div id="Turkije" class="kind-element kind3">
    Ankara is de hoofdstad van Turkije en <br> tevens van het hoofdstadsdistrict van <br> de gelijknamige provincie Ankara.  <br>
    Met een bevolking van 5.723.662  <br>is het na de vorige hoofdstad Istanboel  <br>de grootste stad van Turkije. <br>
    In 1923 was İzmir de tweede stad van  <br>het land, 
    maar in de loop der jaren   <br>is de stad qua inwoneraantal door <br> Ankara ingehaald.
    </div>
    <div id="Spanje" class="kind-element kind4">
    Madrid is de hoofdstad van Spanje en <br>ligt in de gelijknamige Comunidad de<br> Madrid. 
    De stad heeft meer dan 3<br> miljoen inwoners en is dan ook met <br>stip de grootste Spaanse stad. <br>
    Madrid ligt centraal in Spanje op de <br> Spaanse Hoogvlakte en is het rijke <br>centrum van politiek, economie en <br>geschiedenis.
    </div>  
    <div id="Canada" class="kind-element kind5">
        Veel mensen kennen Canada vooral <br>
        van de grote steden Quebec, <br>
        Montreal en Vancouver,
         terwijl het  <br> veel kleinere Ottawa officieel  <br>de hoofdstad van Canada is.</div>
    <div id="Amerika" class="kind-element kind6">
    Washington DC staat voornamelijk <br>bekend als hoofdstad van de <br> Verenigde Staten, 
    maar dit was de <br> stad niet altijd. In de 18e eeuw werd  <br>de stad pas gekozen.
     Toentertijd was  <br> Philadelphia een kansmaker, omdat  <br>hier de onafhankelijkheidsverklaring <br> werd getekend.
    </div>
    <div id="Zuid-Afrika" class="kind-element kind7">
        Zuid Afrika heeft drie hoofsteden <br>
        Pretoria (bestuurlijke macht) <br>
        en Bloemfontein (rechterlijke macht) <br>
        en Kaapstad, de wetgevende macht <br>die wij hebben uitgekozen voor u <br> vlucht naar zuid afrika omdat het de <br> mooiste stad in zuid afrika is.</div>
    <div id="Brazilië" class="kind-element kind8">
    Het lijkt onmogelijk, maar Brazilië <br> deed het.
     Precies 55 jaar geleden <br>verhuisde de Braziliaanse regering van <br> Rio de Janeiro naar het gloednieuwe <br>Brasília.
     Het plan om een nieuwe <br>hoofdstad te bouwen was oud.
    </div>
</div>
</div>
              </div>

</body>
</html>