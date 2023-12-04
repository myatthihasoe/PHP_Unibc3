<?php
    $age = 20;
    if($age >= 18){
        echo "he is adult";
    }
    else if($age > 30){
        echo "he is mature";
    }
    else {
        echo "he is young";
    }
    echo"<br>";

    $age1=32;
    switch($age1){
        case 18;
        echo "he's adult";
        break;
        case 32;
        echo "he's mature";
        break;
        default:
        echo "he is under age";
        break;
    }
?>