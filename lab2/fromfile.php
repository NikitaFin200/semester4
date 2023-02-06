<?php
$rows=5;
$columns=3;
echo '<html><body';
echo '<table border="1">';
for($i=1; $i<=$rows; $i++){
    echo "<table border='1' align='center'>\n";
    echo '<tr>';

    for($j=1; $j<=$columns; $j++){
        if((($i+$j) %2) == 0){
            $color="#000000";
            echo "<td bgcolor=$color><font color = #ffffff>$i, $j</td>";
        }
        else {
            $color="#ffffff";
            echo "<td bgcolor=$color>$i, $j</td>";
        }

    }

    echo'</tr>';
}

echo'</table>';
echo'</body></html>';
?>