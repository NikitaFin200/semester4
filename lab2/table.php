<html>
<body>
<head> 
<link rel="stylesheet" href="t.css">

<?php

$rows=10;
$columns=10;

echo "<table class='second td'>";

for($tr=1; $tr<=$rows; $tr++){
    echo "<table border='1' align='center' width='250'>\n";
    echo "\t<tr>\n";

    if(($tr == '1')){  $b ='<b>'; $end_b ='</b>'; } 

    for($td=1; $td<=$columns; $td++){
        if(($tr != '1') &&  ($td == '1')){  $b ='<b>'; $end_b ='</b>'; } 
        echo "<td>" . $b .$tr * $td. $end_b ."</td>\n"; 
        if(($tr != '1') &&  ($td == '1')){  $b =''; $end_b =''; }  
    }

    $b =''; $end_b ='';
    echo "\t</tr>\n";
}

echo "</table>";
?>
</head>
</body>
</html>

