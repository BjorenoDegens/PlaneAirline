<?php
session_start();
if($_SESSION["userID"]) {
}else header('Location: inlog.php');
require_once('./php/connect.php');
$sql = "SELECT * FROM boeking b JOIN user u ON b.userID = u.UserID JOIN reizen r ON b.reisID = r.reisID WHERE u.userID = :userID";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':userID', $_SESSION['userID']);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recensie.css">
    <title>Document</title>
</head>
<body>
<a class="pijltje-terug1" href="index.php" target="_parent" rel="nofollow">	&#8617;</a>
<div class="card">

<img src="Afbeeldingen\Officieel_logo_CRUD_-removebg-preview.png" width="70">

<form action="./php/crud.php" method="POST">
    <td>
        <input style="display:none" type="text" name="name" style value="<?php echo $_SESSION["userID"]?>">
        <select name="eindbestemming">
            <?php
            foreach ($result as $recentie){?>
            <option value="<?php echo $recentie['reisID']; ?>"><?php echo $recentie['eindbestemming']; ?></option>
            <?php } ?>
        </select>
    </td>
    <label  for="comments">Your Comments</label> <br>
    <textarea name="bericht">
    </textarea><br><br>
    <input type="reset" value="Clear">
    <input type="submit" name="recensiesubmit" value="Submit">
   
</form>

</div>
</body>
</html>