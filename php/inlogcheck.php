<?php 
    require_once('connect.php');
    session_start();
    
    if (isset($_POST['inloggen'])){
        $sql = "SELECT * FROM inlogpage WHERE inlogname = :name AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result) {
            $_SESSION["ID"] = $result['ID'];
            $_SESSION["name"] = $result['name'];

            header("Location:adminpage.php");
        } else {
            header("Location:../inlog.php?message=invalid");
        }
    } else { 
        header("Location:../inlog.php");
    }
?>