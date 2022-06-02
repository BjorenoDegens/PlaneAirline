<?php 
    require_once('connect.php');
    session_start();
    
    // inlog
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
<<<<<<< HEAD

    // Registeer
    if (isset($_POST['registeer']))
    {
        header("Location:../registeer.php");
    }

    // reserveer
    if (isset($_POST['reserveer'])){
        if($_SESSION["name"]) {
            header("Location:../reserveer.php");
        }else {
            header("Location:../inlog.php");
        }
    }
?>

ingelogt verder naar  niet inlogt naar inlogpage
=======
?>

>>>>>>> 909d64e2b0a9efa18b0f7de63b6ac160123f2f74
