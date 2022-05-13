
<?php
session_start();
    if($_SESSION["name"]) {
?>
<a href="uitlog.php">uitloggen</a>
<?php
}else header('Location: inlog.php');
?>