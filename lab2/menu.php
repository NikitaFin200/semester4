<?php
$menu = array(
"Номе"=>"for.php",
"Contact"=>"if.php",
"About"=>"fromfile.php",
"Project"=>"table1.php",
"Map"=>"arr.php"
);
?>
<ul style="list-style-type:none">
<?php
foreach ($menu as $link=>$href){
echo "<li><a href=\"$href\">", $link, '</a></li>';
}  
?>   
</ul>