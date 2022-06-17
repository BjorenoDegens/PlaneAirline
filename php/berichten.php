<?php
session_start();
require_once('connect.php');

$sql = "SELECT * FROM contact";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
if($_SESSION["name"]) {
  if($_SESSION['admin'] == 1){

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
          <a href="#"  >
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
          <a href="berichten.php"class="active">
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
          <span><a href="javascript:AlertIt();">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Uitloggen</span>
              </li>
            </a></span>
            </ul>
            
          </div>
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
      <!-- <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div> -->

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Klanten</div>
          <table style="width:100%">
              <tr>
                <th>Naam</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php 
              foreach($result as $contact){
              ?>
            <tr>
              <form action ="crud.php" method="post">
                <td style="display:none"><input type="text" name="contactID" value="<?php echo $contact['contactID']; ?>"></td>
                <td><p name="naam"><?php echo $contact['naam']; ?></p></td>
                <td><p name="email"><?php echo $contact['email']; ?></p></td>
                <td><p name="message"> <?php echo $contact['message']; ?></p></td>
                <td><input type="submit"name="contactdelete" value="Delete"></td>
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
<?php
  }
else header('Location: userpage.php');
  exit();
}else header('Location: inlog.php');
exit();
?>

