<?php 
$con = @mysql_connect("localhost", "test2", "test2");
mysql_select_db("pb_foods", $con);
$query = "SELECT foodid, name, description from food";
$result = mysql_query($query);

$row = mysql_fetch_array($result, MYSQL_ASSOC);
$foodid = $row['foodid'];
$name = $row['name'];
$description = $row['description'];

echo 
"<div class=\"desc-cont\">
    <h3 class=\"desc-title\">$name</h3>
    <p class=\"desc-text\">$description</p>
</div>";


?>