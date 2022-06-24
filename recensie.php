<?php
session_start();
if($_SESSION["userID"]) {
}else header('Location: inlog.php');
require_once('./php/connect.php');
$sql = "SELECT * FROM boeking b JOIN user u ON b.userID = u.UserID JOIN reizen r ON b.reisID = r.reisID WHERE u.userID = :userID";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':userID', $_SESSION['userID']);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recensie.css">
    <title>Document</title>
</head>

<body >
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

<div class="card">

<img src="Afbeeldingen\Officieel_logo_CRUD_-removebg-preview.png" height="100" width="100">

<form action="./php/crud.php" method="POST">
    <td>
        <input style="display:none" type="text" name="name" style value="<?php echo $_SESSION["userID"]?>">
        <select name="eindbestemming" style="    position: relative;
    bottom: 121px;">
            <?php
            foreach ($result as $recentie){?>
            <option value="<?php echo $recentie['reisID']; ?>"><?php echo $recentie['eindbestemming']; ?></option>
            <?php } ?>
        </select>
    </td>
    <textarea name="bericht" placeholder="Schrijf jouw recensie hier..."></textarea><br><br>
    <input type="reset" value="Clear">
    <input type="submit" name="recensiesubmit" value="Submit">
   
</form>



</div>
</body>
</html>