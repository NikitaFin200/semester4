<?php
$BMW = array( array("X5",120,5,2006));
            
$TOYOTA = array( array("Carina",130,4,2007));
            
$OPEL = array( array("Corsa",140,5,2007));

echo $BMW[0][0];

//echo "<ol>";
for($row =0; $row<1; $row++){
    for($col=0; $col<=3;$col++){
        echo "<li>".$BMW[$row][$col]."</li>";
    }
}
//echo "</ol>";

//echo "<ol>";
for($row =0; $row<1; $row++){
    for($col=0; $col<=3;$col++){
        echo $TOYOTA[$row][$col].'-';
    }
}
//echo "</ol>";

echo "<ol>";
for($row =0; $row<1; $row++){
    for($col=0; $col<=3;$col++){
        echo "<li>".$OPEL[$row][$col]."</li>";
    }
}
echo "</ol>";
?>