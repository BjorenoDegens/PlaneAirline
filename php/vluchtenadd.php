<?php
session_start();
require_once('connect.php');

$sql = "SELECT user.name, reizen.* FROM boeking JOIN user ON boeking.userID = user.UserID JOIN reizen ON boeking.reisID = reizen.reisID  WHERE user.userID = 3";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$sql = "SELECT * FROM  bestemmingen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$resultbestemmingen = $stmt->fetchAll();

if($_SESSION["name"]) {
}else header('Location: inlog.php');
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <i></i>
      <span class="logo_name">PlaneAirline</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php"  >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="review.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Reviews beoordelen</span>
          </a>
        </li>
        <li>
          <a href=""class="active">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Vluchten</span>
          </a>
        </li>
        <li>
          <a href="userpage.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">UserPage</span>
          </a>
        </li>
        <li>
          <a href="berichten.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="../index.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Main page</span>
          </a>
        </li>
        <li class="log_out">
          
              <script type="text/javascript">
                function AlertIt() {
                var answer = confirm ("Weet u zeker dat u wilt uitloggen?")
                if (answer)
                window.location="http://www.continue.com";
                }
                </script>
                
                <span><a href="javascript:AlertIt();">Uitloggen</a></span>
        </li>
      </ul>
      
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Vluchten</span>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $_SESSION["name"]?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Vluchten bewerken</div>
          <table style="width:100%">
              <tr>
                <th>name</th>
                <th>bestemming</th>
                <th>vertrek</th>
                <th>aankomst_terug</th>
                <th>vliegveld</th>
                <th>volwassenen</th>
                <th>kinderen</th>

            </tr>
            <?php 
              foreach($result as $reizen){
              ?>
            <tr>
              <form action ="crud.php" method="post">
                <td style="display:none"><input type="text" name="reisID" value="<?php echo $reizen['reisID']; ?>"></td>
                <td><input type="text" name="eindbestemming" value="<?php echo $reizen['name']; ?>"></td>
                <td><input type="text" name="eindbestemming" value="<?php echo $reizen['eindbestemming']; ?>"></td>
                <td><input type="text" name="vertrek" value="<?php echo $reizen['vertrek']; ?>"></td>
                <td><input type="text" name="aankomst_terug" value="<?php echo $reizen['aankomst_terug']; ?>"></td>
                <td><input type="text" name="vliegveld" value="<?php echo $reizen['vliegveld']; ?>"></td>
                <td><input type="text" name="volwassenen" value="<?php echo $reizen['volwassenen']; ?>"></td>
                <td><input type="text" name="kinderen" value="<?php echo $reizen['kinderen']; ?>"></td>
                <td><input type="submit"name="updatevluchten" value="Update"></td>
                <td><input type="submit"name="deletevluchten" value="Delete"></td>
              </form>
            </tr>
            <?php 
              }
            ?>
          </table>
        </div>
            </div>
            <div class="sales-boxes">
            <div class="recent-sales box">
          <div class="title">Vlieg bestemmingen bewerken</div>
          <table style="width:100%">
              <tr>
                <th>Bestemmingen</th>
                <th>vliegvelden</th>
                <th>Email</th>
                <th>Admin</th>
            </tr>
            <?php 
              foreach($resultbestemmingen as $bestemmingen){
              ?>
            <tr>
              <form action ="crud.php" method="post">
                <td style="display:none"><input type="text" name="bestemmingID" value="<?php echo $bestemmingen['bestemmingID']; ?>"></td>
                <td><input type="text" name="bestemming" value="<?php echo $bestemmingen['bestemming']; ?>"></td>
                <td><input type="text" name="vliegvelden" value="<?php echo $bestemmingen['vliegvelden']; ?>"></td>
                <td><input type="submit"name="updatebestemmingen" value="Update"></td>
                <td><input type="submit"name="deletebestemmingen" value="Delete"></td>
              </form>
            </tr>
            <?php 
              }
            ?>
          </table>
        </div>
        <br>
        <br>
            <div class="top-sales box">
              <div class="title">Vlieg bestemmingen toevoegen</div>
            <div class="card card-shadow">
              <form action="crud.php" method="post">
                <input type="text" name="bestemming" placeholder="Bestemmingen...">
                <input type="text" name="vliegveld" placeholder="vliegveld...">
                <button class="btn" name="addvliegbestemming">toevoegen</button>
                </form>
              </div>
            </div>
            </div>
          <ul class="top-sales-details">
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 <script type="text/javascript">
  function AlertIt() {
  var answer = confirm ("Weet u zeker dat u wilt uitloggen?")
  if (answer)
  window.location.href="uitlog.php";
  }
  </script>

</body>
</html>



