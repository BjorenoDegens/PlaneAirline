<?php

?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="./css/vluchten.css">
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
          <a href="php/admin.php">
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
          <a href="./reviews.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Reviews beoordelen</span>
          </a>
        </li>
        <li>
            <a href="#" class="active">
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
        <span class="dashboard">Vluchten</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Zoeken...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
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
          <div class="title">Vluchten</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Datum</li>
              <li><a href="#">"Datum wanneer gereserveerd"</a></li>
              
            </ul>
            <ul class="details">
            <li class="topic">Klant</li>
            <li><a href="#">"Naam Klant"</a></li>
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
            <li class="topic">Verkocht</li>
            <li><a href="#">"Status Bestelling"</a></li>
            <!-- <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
             <li><a href="#">Pending</a></li>
            <li><a href="#">Delivered</a></li> -->
          </ul>
          <ul class="details">
            <li class="topic">Bestellingen</li>
            <li><a href="#">"Info bestelling"</a></li>
            <!-- <li><a href="#">???</a></li>
            <li><a href="#">???</a></li>
            <li><a href="#">???</a></li>
            <li><a href="#">???</a></li>
            <li><a href="#">???</a></li>
            <li><a href="#">???</a></li>
            <li><a href="#">???</a></li>
            <li><a href="#">???</a></li> -->
          </ul>
          </div>
          <div class="button">
            <a href="#">Zie alle bestellingen</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Meest verkochte vlucht</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <!-- <img src="images/sunglasses.jpg" alt=""> -->
              <span class="product">"Vluchtbestemming"</span>
            </a>
            <span class="price">"Prijs vlucht"</span>
          </li>
          <!-- <li>
            <a href="#">
              <img src="images/jeans.jpg" alt="">
              <span class="product">Hourglass Jeans </span>
            </a>
            <span class="price">$1567</span>
          </li>
          <li>
            <a href="#">
              <img src="images/nike.jpg" alt="">
              <span class="product">Nike Sport Shoe</span>
            </a>
            <span class="price">$1234</span>
          </li>
          <li>
            <a href="#">
              <img src="images/scarves.jpg" alt="">
              <span class="product">Hermes Silk Scarves.</span>
            </a>
            <span class="price">$2312</span>
          </li>
          <li>
            <a href="#">
              <img src="images/blueBag.jpg" alt="">
              <span class="product">Succi Ladies Bag</span>
            </a>
            <span class="price">$1456</span>
          </li>
          <li>
            <a href="#">
              <img src="images/bag.jpg" alt="">
              <span class="product">Gucci Womens's Bags</span>
            </a>
            <span class="price">$2345</span>
            <li>
              <a href="#">
                <img src="images/addidas.jpg" alt="">
              <span class="product">Addidas Running Shoe</span>
            </a>
            <span class="price">$2345</span>
          </li>
<li>
            <a href="#">
              <img src="images/shirt.jpg" alt="">
              <span class="product">Bilack Wear's Shirt</span>
            </a>
            <span class="price">$1245</span>
          </li> -->
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



