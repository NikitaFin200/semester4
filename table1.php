<?php

$rows=rand(2,10);
$columns=rand(2,10);
echo '<html><body';
echo '<table border="1">';

for($tr=1; $tr<=$rows; $tr++){
    echo "<table border='1' align='center' width='550'>\n";

    if(($tr == '1')){$b ='<b>'; $end_b ='</b>'; } 

    for($td=1; $td<=$columns; $td++){
        if(($tr == '1') or ($td == '1')){
            echo "<td bgcolor = #ffff00 align=center width='300'>";  

            if($tr == 1)
            {
                echo "<b>$td</b></td>";
            }
            else{
               echo "<b>$tr</b></td>";
            }
        } 

        else{  
            $s=$tr*$td;
             echo "<td bgcolor=#ffffff align = center width='300'>$s</td>";
        }
    }

    echo"</tr>";
}

echo "</table>";
?>


