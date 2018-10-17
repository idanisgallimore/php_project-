<?php 
// set variables to retrieve data 
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    // the baduser variable will be used to make sure registration passes all tests
    $baduser = 0;
    // connect and select db 
    $con = @mysql_connect("localhost", "test2", "test2") or die("did not connect");
    mysql_select_db("pb_foods", $con) or die("did not select db");

    // Check to make sure user entered everything
    if(trim($userid) == ""){
        echo "You must enter a username!";
        $baduser = 1;
    }

    if(trim($password) == ""){
        echo "You must enter a password!";
        $baduser = 1;
    }

    if(trim($email) == ""){
        echo "You must enter a email!";
        $baduser = 1;
    }

    if($password != $password2){
        echo "passwords must match!";
        $baduser = 1;
    }

    // Check to make sure username is not already in the system
    $query = "SELECT userid from users WHERE userid = '$userid'";
    $result = mysql_query($query) or die("did not query");
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    if($row['userid'] == $result){
        echo "Pick another username";
        $baduser = 1;
    }

    if($baduser != 1){
        $query = "INSERT into users VALUES('$userid', '$email', PASSWORD('$password')) ";
        $result = mysql_query($query) or die ("did not query");
        if($result){
            echo "you are registered";
            exit;
        }else{
            echo "you are not registered";
        }

       

    }

?>