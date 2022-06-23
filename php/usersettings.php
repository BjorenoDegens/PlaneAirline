<?php
session_start();
  if($_SESSION["userID"]) {
}else header('Location: inlog.php');
require_once('connect.php');
$sql = "SELECT * FROM user u WHERE u.userID = :userID";
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
          <a href="userpage.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">User settings</span>
          </a>
        </li>
        <li>
          <a href="../index.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Mainpage</span>
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
          <div class="title">Uw Account</div>
          <table style="width:100%">
              <tr>
                <th>Naam</th>
                <th>Gebruikersnaam</th>
                <th>Password</th>
                <th>Email</th>
            </tr>
            <?php 
              foreach($result as $user){
              ?>
            <tr>
              <form action ="crud.php" method="post">
                <td style="display:none"><input type="text" name="UserID" value="<?php echo $user['UserID']; ?>"></td>
                <td><input type="text" name="name" value="<?php echo $user['name']; ?>"></td>
                <td><input type="text" name="gebruikersnaam" value="<?php echo $user['gebruikersnaam']; ?>"></td>
                <td><input type="text" name="password"value="<?php echo $user['password']; ?>"></td>
                <td><input type="text" name="email" value="<?php echo $user['email']; ?>"></td>
                <td><input type="submit"name="updatemyself" value="Update"></td>
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
