<?php
session_start();
    if($_SESSION["admin"] == 1) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/backend.css">
        <title>Document</title>
    </head>
    <body>
        <main>
            <div class="navbar">
                <div class="barone"></div>
                <div class="bartwo"></div>
                <div class="barthree"></div>
                <div class="barfour">
                    <a href="userpage.php">Ga naar userpage</a>
                </div>
            </div>
            <div class="infobox"></div>
        </main>
    </body>
    </html>
<?php }else header("Location:../inlog.php") ?>