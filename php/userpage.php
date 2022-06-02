<?php
session_start();
    if($_SESSION["name"]) {
        ?>
<?php
}else header('Location: inlog.php');
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mid{
            height:700px;
            width:900px;
            background-color: black;
            display:flex;
        }
        .midbar{
            background-color:darkslategrey;
            height:100%;
            width:200px;
        }
        .centermid{
            background-color:grey;
            height:100%;
            width: 700px;
        }
        #bar1{
            background-color:darkred;
            height:175px;
            display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: flex-end;
           
        }
        #button1{
            border: 2px solid #04AA6D;
    padding: 0px 0px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin-left: 0px;
    width: 186px;
    margin-bottom: 4px;

        }
        #bar2{
            background-color:darkblue;
            height:175px;
            display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: flex-end;
        }
        #button2{
            border: 2px solid #04AA6D;
    padding: 0px 0px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin-left: 0px;
    width: 186px;
    margin-bottom: 4px;

        }
        #bar3{
            background-color:darkorange;
            height:175px;
            display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: flex-end;
        }
        #button3{
            border: 2px solid #04AA6D;
            padding: 0px 0px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin-left: 0px;
            width: 186px;
            margin-bottom: 4px;

        }
        #bar4{
            background-color:wheat;
            height:175px;
            display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: flex-end;
        }
    </style>
</head>
<body style="display: flex;align-content: center;justify-content: center;">
    <div class="mid">
        <div class="midbar">
            <div id="bar1">
            <a href="adminpage.php" id="button1">
                <h1>Profile</h1>
            </a>
            </div>
            <div id="bar2">
            <a href="dashboard.php" id="button2">
                <h1>Dashboard</h1>
    </a>
            </div>
            <div id="bar3">
            <a href="reserveren.php" id="button3">
                <h1>reserveren</h1>
    </a>
            </div>
            <div id="bar4">
            <a href="logout.php" id="button4">
                <h1>Logout</h1>
    </a>
            </div>
        </div>
        <div class="centermid"></div>
    </div>
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
            <i class='bx bx-cog' ></i>
            <span class="links_name">Instellingen</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../inlog.php">
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
              <!-- <img src="images/sunglasses.jpg" alt=""> -->
              <span class="product">Italië</span>
            </a>
            <span class="price">€206,99</span>
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
    </body>
</html>
