<?php
    require_once('connect.php');
    session_start();
    
    if (isset($_POST['inloggen'])){
        $sql = "SELECT * FROM user WHERE gebruikersnaam = :name AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':password', $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result) {
            $_SESSION["UserID"] = $result['UserID'];
            $_SESSION["name"] = $result['name'];
            $_SESSION['admin'] = $result['admin'];
            if ($result['admin'] === 0){
                header("Location:userpage.php");
            }else if ($result['admin'] === 1){
                header("Location:admin.php");
            }else header("Location:../inlog.php?message=problem");
        } else {
            header("Location:../inlog.php?message=invalid");
        }
    } else { 
        header("Location:../inlog.php");
    }

    // Registeer link to
    if (isset($_POST['registeer']))
    {
        header("Location:../registeer.php");
    }
    // wachtwoordvergeten link to
    if (isset($_POST['wwforgot']))
    {
        header("Location:../wachtwoordvergeten.php");
    }
    // reserveer
    if (isset($_POST['reserveer'])){
        if($_SESSION["name"]) {
            $sql = "INSERT INTO user (bestemming,vertrek,aankomst_terug,vliegveld, volwassenen,kinderen)
            VALUES (:bestemming,:vertrek,:aankomst_terug, :vliegveld,:volwassenen,:kinderen)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":bestemming", $_POST['bestemming']);
            $stmt->bindParam(":vertrek", $_POST['vertrek']);
            $stmt->bindParam(":aankomst_terug", $_POST['aankomst_terug']);
            $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
            $stmt->bindParam(":volwassenen", $_POST['volwassenen']);
            $stmt->bindParam(":kinderen", $_POST['kinderen']);
            $stmt->execute();
            header("Location:../reserveer.php");
        }else {
            header("Location:../inlog.php");
        }
    }
?>

ingelogt verder naar  niet inlogt naar inlogpage
