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
     
      <ul class="nav-links">
        <li>
          <a href="admin.php" >
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
          <a href="review.php"  class="active">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Reviews beoordelen</span>
          </a>
        </li>
        <li>
          <a href="vluchtenadd.php">
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
        <span class="dashboard">Reviews beoordelen</span>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $_SESSION["name"]?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Klanten</div>
          <table style="width:100%">
              <tr>
                <th>Naam</th>
                <th>Gebruikersnaam</th>
                <th>Email</th>
                <th>Admin</th>
            </tr>
            <?php 
              foreach($result as $user){
              ?>
            <tr>
              <form action ="crud.php" method="post">
                <td style="display:none"><input type="text" name="UserID" value="<?php echo $user['UserID']; ?>"></td>
                <td><input type="text" name="name" value="<?php echo $user['name']; ?>"></td>
                <td><input type="text" name="gebruikersnaam" value="<?php echo $user['gebruikersnaam']; ?>"></td>
                <td><input type="text" name="email" value="<?php echo $user['email']; ?>"></td>
                <td><select name="admin">
                <option selected ="selected" style="display:none"><?php echo $user['admin']; ?></option>
                <option >0</option>
                <option >1</option>
                </select></td>
                <td><input type="submit"name="update" value="Update"></td>
                <td><input type="submit"name="delete" value="Delete"></td>
              </form>
            </tr>
            <?php 
              }
            ?>
          </table>
        </div>
        <div class="top-sales box">
          <div class="title">Meest verkochte vlucht</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <!-- <img src="images/sunglasses.jpg" alt=""> -->
              <span class="product">Italië</span>
            </a>
            <span class="price">€206,99</span>
          </li>
          </ul>
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

</body>
</html>



