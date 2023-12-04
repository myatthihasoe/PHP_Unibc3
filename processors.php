<?php
    $product_name = "Processors";
    switch($product_name){
        case "Video Cards":
            echo "Video cards range from $50 to $";
            break;
        case "Processors":
            echo "Processors range from $100 to $100";
            break;
        default:
        echo "Sorry, we don't carry $product_name in our catalog.";
        break;
    }
?>