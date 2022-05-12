<?php
    session_start();
    if (isset($_POST['login'])){
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','crud') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM inlogpage WHERE inlogname ='" . $_POST["name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["ID"])) {
    header("Location:adminpage.php");
    }
}   else{
    header("Location:inlog.php");
    exit();}
?>