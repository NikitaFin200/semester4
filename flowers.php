<?php
$flowers = array( array("розы", 100 , 15),
                  array("тюльпаны", 60 , 25),
                  array("орхидеи", 180 , 7) 
                ); 
 
echo "<h1>Ручной доступ к элементам</h1>";
 
echo $flowers[0][0]." цена ".$flowers[0][1]." количество ".$flowers[0][2]."<br>";
echo $flowers[1][0]." цена ".$flowers[1][1]." количество ".$flowers[1][2]."<br>";
echo $flowers[2][0]." цена ".$flowers[2][1]." количество ".$flowers[2][2]."<br>";
 
echo "<h1>Использование циклов для вывода элементов</h1>";
 
echo "<ol>";
for ($row = 0; $row < 3; $row++) {
    echo "<li><b>Номер строки $row</b>";
    echo "<ul>";
 
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$flowers[$row][$col]."</li>";
    }
 
    echo "</ul>";
    echo "</li>";
}
echo "</ol>";
?>