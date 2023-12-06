<?php
$string = "Inle Lake is a freshwater lake located in the Nyaungshwe Township of Taunggyi District of Shan State, part of Shan Hills in  Myanmar (Burma).";   

echo "<h3>Length of the string: ".strlen( $string )." characters.</h3>";

$totalCha = strlen( $string );
$totalWords = str_word_count( $string );

echo "<h3>Total number of characters: " . $totalCha ."<br></h3>";
echo "<h3>Total number of words: ". $totalWords ."<br></h3>";

echo "<h3>Uppercase: ". strtoupper( $string ) ."<br></h3>";
echo "<h3>LowerCase: ". strtolower( $string ) ."<br></h3>";
echo "<h3>First character of each word in uppercase: ". ucwords(strtolower( $string )) ."<br></h3>";
echo "<h3>First character of the string in uppercase: ". ucfirst(strtolower( $string )) ."<br></h3>";

?>