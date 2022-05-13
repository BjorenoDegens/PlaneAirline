<?php 
require_once('connect.php');
session_start();
// if(count($_POST)>0) {
    if (isset($_POST['login'])){
    $sql = "SELECT * FROM inlogpage WHERE inlogname = :name AND password = :password";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':password', $_POST['password']);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result) {
    $_SESSION["ID"] = $result['ID'];
    $_SESSION["name"] = $result['name'];
    } else {
     $message = "Invalid Username or Password!";
     header("Location:inlog.php?message=invalid");
    }
}
if(isset($_SESSION["ID"])) {
header("Location:adminpage.php");
}
// }
?>