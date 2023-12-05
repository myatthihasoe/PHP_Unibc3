<?php
$str = "This is some <b>bold</b> text.";
echo $str;
echo "<br>";
echo htmlspecialchars($str);
echo "<br>";
echo htmlspecialchars_decode($str);
echo "<br>";    
?>
<?php
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text. &check;";
echo $str;
echo "<br>";
echo htmlspecialchars($str);
echo "<br>";
echo htmlspecialchars_decode($str);
echo "<br>";
?>