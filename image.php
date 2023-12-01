<?php
$count = 0;
while ($count < 5): //start while loop
?>
<img src="image/dragon.jfif" width="500px" height="200px" alt="images">

<?php 
$count++;
endwhile //end while loop
?>

<?php for ($i = 0; $i <5; $i++) : 
    echo "<img src = 'dragon.jfif' width='300px' height='100px' alt = 'images'";
    echo "<img src=\" dragon.jfif\" width= \"300px\" height=\"100px\" alt = 'images'";
endfor;

?>