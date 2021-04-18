<?php
session_start();

if(isset($_POST['location']) && $_POST['location'] == "farm"){
    $initial_score = rand(10,20);
    $_SESSION['initial_score'] = $initial_score;
    $_SESSION['score'] += $_SESSION['$initial_score'];
    $_SESSION['message'] = "<p class='earned'>You entered a farm and earned ".$initial_score." golds.</p>";
}

if(isset($_POST['location']) && $_POST['location'] == "cave"){
    $initial_score = rand(5,10);
    $_SESSION['initial_score'] = $initial_score;
    $_SESSION['score'] += $_SESSION['$initial_score'];
    $_SESSION['message'] = "<p class='earned'>You entered a cave and earned ".$initial_score." golds.</p>";
}

if(isset($_POST['location']) && $_POST['location'] == "house"){
    $initial_score = rand(2,5);
    $_SESSION['initial_score'] = $initial_score;
    $_SESSION['score'] += $_SESSION['$initial_score'];
    $_SESSION['message'] = "<p class='earned'>You entered a house and earned ".$initial_score." golds.</p>";
}

if(isset($_POST['location']) && $_POST['location'] == "casino"){
    $initial_score = rand(-50,50);
    $_SESSION['initial_score'] = $initial_score;
    $_SESSION['score'] += $_SESSION['$initial_score'];
    if($_SESSION['initial_score']<0){
    $_SESSION['message'] = "<p class='lost'>You entered a casino and lost ".$initial_score." golds... Ouch..</p>";
    }
    else{
        $_SESSION['message'] = "<p class='earned'>You entered a casino and earned ".$initial_score." golds.</p>";        
    }
}

if(isset($_POST['restart'])){
    session_destroy();
}

header('Location: index.php');
?>
