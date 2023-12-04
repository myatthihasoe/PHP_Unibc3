<?php
    $BookTitle = "The Cask of Amontillado";
    echo"<p> The book title contains ". strlen($BookTitle) ."characters.</p>";
?>

<?php
    $foo = 'hello world';
    echo ucfirst($foo);
    $bar = 'HELLO WORLD';
    echo "<br> "; echo ucfirst($bar);
    echo "<br>";
    echo ucfirst(strtolower($bar));
?>
<?php
$str = "myat thiha soe";
echo "<br>";
    echo strtoupper($str) . "<br>";
    echo strtolower($str) . "<br>";
    echo ucfirst($str) . "<br>";
    echo lcfirst($str) . "<br>";
   
    echo ucwords($str) . "<br>";
?>