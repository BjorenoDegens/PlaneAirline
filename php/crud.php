<?php
require_once('connect.php');
// CRUD admin Database User
if(isset( $_POST['update'])) {
    $sql = "UPDATE user SET name = :name, gebruikersnaam = :gebruikersnaam, email = :email, admin = :admin
    WHERE UserID = :UserID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":UserID", $_POST['UserID']);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":gebruikersnaam", $_POST['gebruikersnaam']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":admin", $_POST['admin']);
    $stmt->execute();
    header('Location: admin.php');
    exit();
}
else if(isset($_POST['delete'])) {
    $sql = "DELETE FROM user 
	 WHERE UserID = :UserID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":UserID", $_POST['UserID']);
    $stmt->execute();
    header('Location: admin.php');
    exit();
}

else if(isset($_POST['registeer'])) {
    $sql = "INSERT INTO user (name,gebruikersnaam,email,password)
	 VALUES (:name,:gebruikersnaam,:email, :password)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":gebruikersnaam", $_POST['gebruikersnaam']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":password", $_POST['password']);
    $stmt->execute();

    header('Location: ../inlog.php');
    exit();
}

else if(isset( $_POST['forgot'])) {
    $sql = "UPDATE user SET password = :password
    WHERE email = :email AND gebruikersnaam = :gebruikersnaam";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":gebruikersnaam", $_POST['gebruikersnaam']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        if (":email" == "email" && ":gebruikersnaam" == "gebruikersnaam"){
            header('Location: ../inlog.php');
            exit();
        } else {
            header('Location: ../wachtwoordvergeten.php');
        }
}
// CRUD vluchtenadd.php Database reizen
	

else if(isset($_POST['addvluchten'])) {
    $sql = "INSERT INTO reizen (bestemming,vliegveld)
	 VALUES (:bestemming,:vliegveld)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":bestemming", $_POST['bestemming']);
    $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
    $stmt->execute();
    header('Location: vluchtenadd.php');
    exit();
}
else if(isset( $_POST['updatevluchten'])) {
    $sql = "UPDATE reizen SET eindbestemming = :eindbestemming, vertrek = :vertrek,aankomst_terug= :aankomst_terug,vliegveld = :vliegveld,volwassenen=:volwassenen,kinderen=:kinderen
    WHERE reisID = :reisID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":reisID", $_POST['reisID']);
    $stmt->bindParam(":eindbestemming", $_POST['eindbestemming']);
    $stmt->bindParam(":vertrek", $_POST['vertrek']);
    $stmt->bindParam(":aankomst_terug", $_POST['aankomst_terug']);
    $stmt->bindParam(":vliegveld", $_POST['vliegveld']);
    $stmt->bindParam(":volwassenen", $_POST['volwassenen']);
    $stmt->bindParam(":kinderen", $_POST['kinderen']);
    $stmt->execute();
    header('Location: vluchtenadd.php');
    exit();
}
else if(isset($_POST['deletevluchten'])) {
    $sql = "DELETE FROM boeking 
	 WHERE reisID = :reisID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":reisID", $_POST['reisID']);
    $stmt->execute();
    header('Location: vluchtenadd.php');
    exit();
}

// CRUD vluchtenadd.php Database bestemmingen
else if(isset($_POST['addvliegbestemming'])) {
    $sql = "INSERT INTO bestemmingen (bestemming,vliegvelden)
	 VALUES (:bestemming,:vliegvelden)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":bestemming", $_POST['bestemming']);
    $stmt->bindParam(":vliegvelden", $_POST['vliegvelden']);
    $stmt->execute();
    header('Location: vluchtenadd.php');
    exit();
}
else if(isset( $_POST['updatebestemmingen'])) {
    $sql = "UPDATE bestemmingen SET bestemming = :bestemming, vliegvelden = :vliegvelden
    WHERE bestemmingID = :bestemmingID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":bestemmingID", $_POST['bestemmingID']);
    $stmt->bindParam(":bestemming", $_POST['bestemming']);
    $stmt->bindParam(":vliegvelden", $_POST['vliegvelden']);
    $stmt->execute();
    header('Location: vluchtenadd.php');
    exit();
}
else if(isset($_POST['deletebestemmingen'])) {
    $sql = "DELETE FROM bestemmingen 
	 WHERE bestemmingID = :bestemmingID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":bestemmingID", $_POST['bestemmingID']);
    $stmt->execute();
    header('Location: vluchtenadd.php');
    exit();
}else header('Location: ../login.php');
exit();
