<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren</title>
    <style>
        .mid{
            height:700px;
            width:900px;
            background-color: black;
            display:flex;
        }
        .midbar{
            background-color:darkslategrey;
            height:100%;
            width:200px;
        }
        .centermid{
            background-color:grey;
            height:100%;
            width: 700px;
        }
        #bar1{
            background-color:darkred;
            height:175px;
        }
        #bar2{
            background-color:darkblue;
            height:175px;
        }
        #bar3{
            background-color:darkorange;
            height:175px;
        }
        #bar4{
            background-color:darkyellow;
            height:175px;
        }

    </style>
</head>
<body style="display: flex;align-content: center;justify-content: center;">
    <div class="mid">
        <div class="midbar">
            <div id="bar1"></div>
            <div id="bar2"></div>
            <div id="bar3"></div>
            <div id="bar4"></div>
        </div>
        <div class="centermid"></div>
    </div>
</body>
</html>
