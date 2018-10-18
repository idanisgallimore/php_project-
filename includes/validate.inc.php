<?php 
    // grab data from login form
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // connect and select db 
    $con = @mysql_connect("localhost", "test2", "test2") or die("did not connect");
    mysql_select_db("pb_foods", $con) or die("did not select db");

    // Do and send query 
    $query = "SELECT userid from users where userid = '$userid' and password = PASSWORD('$password')";
    $result = mysql_query($query) or die("query did not work");

    if(mysql_num_rows($result) == 0){
        echo "did not log in";
    }else{
        // start the session cookie stuff
        $_SESSION['valid_user'] = $userid;
        echo "$userid, you are logged in!";
    }



?>