<?php
session_start();
  if($_SESSION["userID"]) {
}else header('Location: inlog.php');
require_once('connect.php');
$sql = "SELECT * FROM boeking b JOIN user u ON b.userID = u.UserID JOIN reizen r ON b.reisID = r.reisID WHERE u.userID = :userID";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':userID', $_SESSION['userID']);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/user.css">
 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
    <body>
    <div class="sidebar">
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
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
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Vluchten</span>
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
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../php/uitlog.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Uitloggen</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">

        <span class="admin_name"><?php echo $_SESSION["name"]?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recente Boekingen</div>
          <table style="width:100%">
              <tr>
                <th>Naam</th>
                <th>Bestemming</th>
                <th>Vliegveld</th>
                <th>Vertrek heen</th>
                <th>Vertrek terug</th>
                <th>Volwassenen</th>
                <th>Kinderen</th>
            </tr>
            <?php 
              foreach($result as $user){
              ?>
            <tr>
              <form action ="crud.php" method="post">
                <td style="display:none"><input type="text" name="UserID" value="<?php echo $user['UserID']; ?>"></td>
                <td><p type="text" name="name"><?php echo $user['name']; ?></p></td>
                <td><p type="text" name="gebruikersnaam"><?php echo $user['eindbestemming']; ?></p></td>
                <td><p type="text" name="email"><?php echo $user['vliegveld']; ?></p></td>
                <td><p type="text" name="email"><?php echo $user['vertrek']; ?></p></td>
                <td><p type="text" name="email"><?php echo $user['aankomst_terug']; ?></p></td>
                <td><p type="text" name="email"><?php echo $user['volwassenen']; ?></p></td>
                <td><p type="text" name="email"><?php echo $user['kinderen']; ?></p></td>
              </form>
            </tr>
            <?php 
              }
            ?>
          </table>
        </div>
      </div>
    </div>
  </section>

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
