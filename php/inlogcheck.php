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
            $_SESSION["userID"] = $result['UserID'];
            $_SESSION["name"] = $result['name'];
            $_SESSION['admin'] = $result['admin'];
            if ($result['admin'] === 0){
                header("Location:userpage.php");
                exit();
            }else if ($result['admin'] === 1){
                header("Location:admin.php");
                exit();
            }else header("Location:../inlog.php?message=problem");
            exit();
        } else {
            header("Location:../inlog.php?message=invalid");
            exit();
        }
    }

    // Registeer link to
    else if (isset($_POST['registeer']))
    {
        header("Location:../registeer.php");
    }
    // wachtwoordvergeten link to
    else if (isset($_POST['wwforgot']))
    {
        header("Location:../wachtwoordvergeten.php");
    }
    // reserveer
    else if (isset($_POST['reserveer'])){
        if($_SESSION["userID"]) {
            $sql = "INSERT INTO reizen (eindbestemming,vertrek,aankomst_terug,vliegveld, volwassenen,kinderen)
            VALUES (:eindbestemming,:vertrek,:aankomst_terug, :vliegveld,:volwassenen,:kinderen)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":eindbestemming", $_POST['bestemming']);
            $stmt->bindParam(":vertrek", $_POST['vertrek']);
            $stmt->bindParam(":aankomst_terug", $_POST['aankomst_terug']);
            $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
            $stmt->bindParam(":volwassenen", $_POST['volwassenen']);
            $stmt->bindParam(":kinderen", $_POST['kinderen']);
            $stmt->execute();

            $reisID = $connect->lastInsertId();

            $sql = "INSERT INTO boeking (userID, reisID)
            VALUES (:userID, :reisID)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":userID", $_SESSION['userID']);
            $stmt->bindParam(":reisID", $reisID);
            $stmt->execute();

            header("Location:../reserveer.php");
            exit();
        }else {
            header("Location:../inlog.php");
            exit();
        }
    }

    
    else header("Location:../inlog.php");
    exit();
?>
