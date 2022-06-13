<?php
require_once('connect.php');

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
} else
    header('Location: ../registeer.php');
    exit();