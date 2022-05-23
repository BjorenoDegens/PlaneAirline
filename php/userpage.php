<?php
session_start();
    if($_SESSION["name"]) {
?> <h1>u bent ingelogt als <?php echo $_SESSION["name"]?></h1><br>
<a href="uitlog.php">uitloggen</a>
<?php
}else header('Location: inlog.php');
?>
<!DOCTYPE html>
<html lang="en">
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
<<<<<<< HEAD:php/adminpage.php
        #button4{
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
=======
>>>>>>> 8beacb9fcafa1dc3208067fc671356a08712f1cc:php/userpage.php
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
</body>
</html>
