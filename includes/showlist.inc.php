<h2 class="post-title">List of Meals</h2>
<div class="title-cont">
<?php 
    $con = @mysql_connect("localhost", "test2", "test2");
    mysql_select_db("pb_foods", $con);
    $query = "SELECT foodid, name from food";
    $result = mysql_query($query);
     if(mysql_num_rows($result) == 0){
         echo "There are no foods!";
     }else{
         while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $foodid = $row['foodid'];
            $name = $row['name'];

            echo 
                "<a class=\"food-title\" href=\"index.php?content=showfood&id=$foodid\">$name</a>";
         }
     }

?>
<div>