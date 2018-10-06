<?php 
    $name = $_POST['name'];
    $description = $_POST['description'];
    $con = @mysql_connect("localhost", "test2", "test2") or die("did not connect");
    mysql_select_db("pb_foods", $con) or die("did not select db");
    $query = "INSERT into food(name, description) VALUES ('$name', '$description')";
    $result = mysql_query($query) or die("did not query");
    
    if($result){
        echo "<h2 class=\"msg\">food posted.</h2>";
    }else{
        echo "food not posted";
    }

?>