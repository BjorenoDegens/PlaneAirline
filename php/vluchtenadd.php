<?php
session_start();
require_once('connect.php');

$sql = "SELECT * FROM user";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

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
          <a href="admin.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Bestellingen</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Bestel lijst</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Reviews beoordelen</span>
          </a>
        </li>
        <li>
          <a href="#"class="active">
            <i class='bx bx-coin-stack'></i>
            <span class="links_name" >Vluchten</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">UserPage</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Instellingen</span>
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
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Zoeken...">
        <i class='bx bx-search' ></i>
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
        </div>
        <div class="top-sales box">
          <div class="title">Vluchten toevoegen</div>
            <div class="card card-shadow">
              <form action="">
                <div class="card-header card-image">
                    <img src="../afbeeldingen/placeholder.jpg">
                </div>
                <div class="card-body">
                    <input type="text"name="name"placeholder="Name..">
                    <br>
                    <p>
                    €<input type="number" name="price" placeholder="Price..">
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn">Info</button>
                    <a class="btn btn-outline" href="reserveer.php" target="_parent">Reserveren</a>
                    </div>
                </form>
              </div>
            </div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
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

</body>
</html>



