<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/backend.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>
    <main>
        <div class="side">
            <div class="sidebar" id="sidebar">
              <a href="../HTML/index.html" style="text-decoration: none;"><h1>Persoonlijke Gegevens</h1></a>  
              <br/>
              <a href="../HTML/Kapsalon.html" style= "text-decoration: none;"><h1>Vluchten</h1></a>  
              <br/>
              <a href="../HTML/Durum.html" style="text-decoration: none;"><h1>Recente Vluchten</h1></a>
              <br/>
              <a href="../HTML/Extras.html" style="text-decoration: none;"><h1>Wachtwoord</h1></a>  
              <br/>
            <a href="uitlog.php" id="extras" style="text-decoration: none;"><h1>Uitloggen</h1></a>  
            </div>
      
          </div>
        <div class="navbar">
            <div class="barone">
                
            </div>
            <div class="bartwo"></div>
            <div class="barthree"></div>
            <div class="barfour"></div>
        </div>
        <div class="infobox"> <h1>u bent ingelogt als <?php echo $_SESSION["name"]?></h1></div>

    </main>
    <script src="../main.js"></script>
</body>
</html>