
<?php
session_start();
    if($_SESSION["name"]) {
?> <h1>u bent ingelogt als <?php echo $_SESSION["name"]?></h1><br>
<a href="uitlog.php">uitloggen</a>
<?php
}else header('Location: inlog.php');
?>