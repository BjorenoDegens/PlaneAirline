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
<<<<<<< HEAD
        if($_SESSION["userID"]) {
            $sql = "INSERT INTO reizen (eindbestemming,vertrek,aankomst_terug,vliegveld, volwassenen,kinderen)
            VALUES (:eindbestemming,:vertrek,:aankomst_terug, :vliegveld,:volwassenen,:kinderen)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":eindbestemming", $_POST['bestemming']);
=======
        if($_SESSION["name"]) {
            $sql = "INSERT INTO user (bestemming,vertrek,aankomst_terug,vliegveld, volwassenen,kinderen)
            VALUES (:bestemming,:vertrek,:aankomst_terug, :vliegveld,:volwassenen,:kinderen)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":bestemming", $_POST['bestemming']);
>>>>>>> 29ad7b8dd6cb027caef22770b5c522244b25aaae
            $stmt->bindParam(":vertrek", $_POST['vertrek']);
            $stmt->bindParam(":aankomst_terug", $_POST['aankomst_terug']);
            $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
            $stmt->bindParam(":volwassenen", $_POST['volwassenen']);
            $stmt->bindParam(":kinderen", $_POST['kinderen']);
            $stmt->execute();
<<<<<<< HEAD

            $reisID = $connect->lastInsertId();

            $sql = "INSERT INTO boeking (userID, reisID)
            VALUES (:userID, :reisID)";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":userID", $_SESSION['userID']);
            $stmt->bindParam(":reisID", $reisID);
            $stmt->execute();

=======
>>>>>>> 29ad7b8dd6cb027caef22770b5c522244b25aaae
            header("Location:../reserveer.php");
            exit();
        }else {
            header("Location:../inlog.php");
            exit();
        }
    }

    
    header("Location:../inlog.php");
    exit();
?>
