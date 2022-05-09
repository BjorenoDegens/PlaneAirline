<?php
    session_start();
    if isset($_POST['login']){
    require_once ('connect.php');
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','miniCrud') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:adminpage.php");
    }else header("Location:inlog.php")
}else header("Location:inlog.php")
?>