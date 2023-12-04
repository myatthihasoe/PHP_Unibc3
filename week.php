<?php
$DaysOfWeek = array(" Monday "," Tuesday "," Wednesday "," Thursday "," Friday "," Saturday "," Sunday ");
$Count = 0;
do{
    echo "<h2> $DaysOfWeek[$Count]  <br></h2>";
    ++ $Count;
}while($Count < 7);
?>