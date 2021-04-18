<?php
session_start();

if(!isset($SESSION['score'])){
    $_SESSION['score'] = 0;
}

if(isset($_SESSION['msg_log'])){
    $_SESSION['msg_log'] .= $_SESSION['message'];
}
else{
    $_SESSION['msg_log'] = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Gold Game</title>
    <style>
    body
    {
        text-align: center;
        font-family: "Comic Sans MS", "Comic Sans", cursive;       
    }    
    .output{
        text-align: left;
    }

    .restart{
        text-align: left;
        color: green;
        border-style: none;
        margin-bottom: 50px;
    }

    .container{
        display: inline-block;
        margin: 20px;
    }
    form{
        display: inline-block;
        border: 1px solid black;
        width: 250px;
        margin-right: 20px;
        
    }
    .activities{
        text-align: left;
    }
    .earned{
        color: green;
    }
    .lost{
        color: red;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="output">
            <h2>Your Gold: <?= $_SESSION['score'] ?></h2>
            
            <form class="restart" action="ninja-process.php" method="post">
                <input type="hidden" name="restart">
                <input type="submit" value="restart">
            </form>
        </div>    
        <form action="ninja-process.php" method="post">
            <p>Farm</p>
            <p>(earns 10-20 golds)<p>
            <input type="hidden" name="location" value="farm">
            <input type="submit" value="Find Gold!">
        </form>
        <form action="ninja-process.php" method="post">
            <p>Cave</p>
            <p>(earns 5-10 golds)<p>
            <input type="hidden" name="location" value="cave">
            <input type="submit" value="Find Gold!">
        </form>
        <form action="ninja-process.php" method="post">
            <p>House</p>
            <p>(earns 2-5 golds)<p>
            <input type="hidden" name="location" value="house">
            <input type="submit" value="Find Gold!">
        </form>
        <form action="ninja-process.php" method="post">
            <p>Casino!</p>
            <p>(earns/takes 0-50 golds)<p>
            <input type="hidden" name="location" value="casino">
            <input type="submit" value="Find Gold!">
            </form>
        <p class="activities">Activities:</p>
        <ul class="message">
        <?= $_SESSION['msg_log'] ?>
        </ul>
    </div>
</body>
</html>