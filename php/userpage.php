<?php
session_start();
  if($_SESSION["name"]) {
}else header('Location: inlog.php');
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
<<<<<<< HEAD
          <a href="../php/uitlog.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Uitloggen</span>
          </a>
        </li>
      </ul>
=======
          <span><a href="javascript:AlertIt();">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Uitloggen</span>
              </li>
            </a></span>
            </ul>
            
          </div>
>>>>>>> 29ad7b8dd6cb027caef22770b5c522244b25aaae
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

        <span class="admin_name"><?php echo $_SESSION["name"]?></span>
        <i class='bx bx-chevron-down' ></i>
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
          <div class="title">Recente Boekingen</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Datum</li>
              <li><a href="#">30 Jun 2022</a></li>
              <!-- <li><a href="#">09 Mei 2022</a></li>
              <li><a href="#">05 Apr 2022</a></li>
              <li><a href="#">17 Mei 2022</a></li>
              <li><a href="#">26 Feb 2022</a></li>
              <li><a href="#">12 Jan 2022</a></li>
              <li><a href="#">02 Mei 2022</a></li>
              <li><a href="#">15 Jan 2022</a></li>
              <li><a href="#">07 Mei 2022</a></li>
              <li><a href="#">15 Jan 2022</a></li>
              <li><a href="#">07 Mei 2022</a></li> -->
            </ul>
            <ul class="details">
            <li class="topic">Klant</li>
            <li><a href="#"><?php echo $_SESSION["name"]?></a></li>
            <!-- <li><a href="#">Margriet Amalia</a></li>
            <li><a href="#">Dora de Jong</a></li>
            <li><a href="#">Diana van der Vliet</a></li>
            <li><a href="#">Peter Jansen</a></li>
            <li><a href="#">Alex Sloot</a></li>
            <li><a href="#">Hans Rongen</a></li>
            <li><a href="#">Koen van Dijk</a></li>
             <li><a href="#">Tim Janssen</a></li> -->
          </ul>
          <ul class="details">
            <li class="topic">Bestellingen</li>
            <li><a href="#">€</a></li>
            <!--<li><a href="#">€</a></li>
            <li><a href="#">€</a></li>
            <li><a href="#">€</a></li>
            <li><a href="#">€</a></li>
            <li><a href="#">€</a></li>
            <li><a href="#">€</a></li>
            <li><a href="#">€</a></li>
            <li><a href="#">€</a></li>
          </ul> -->
          </div>
          <div class="button">
            <a href="#">Zie alle bestellingen</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Meest verkochte vlucht</div>
          <ul class="top-sales-details">
            <li>

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
 <script type="text/javascript">
  function AlertIt() {
  var answer = confirm ("Weet u zeker dat u wilt uitloggen?")
  if (answer)
  window.location.href="uitlog.php";
  }
  </script>
    </body>
</html>
