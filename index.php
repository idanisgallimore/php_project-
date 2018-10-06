<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>My Favorite Plant Based Meals</title>
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Roboto+Mono" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <div class="nav">
        <?php include("includes/nav.inc.php"); ?>
    </div>
   

    <!-- Go between pages -->
    <div class="main">
    <?php 
        if(!isset($_REQUEST['content'])){
            include('includes/main.inc.php');
        }else{
            $content = $_REQUEST['content'];
            $nextpage = 'includes/'.$content.'.inc.php';
            include($nextpage);
        }
    
    ?>
    </div>
    <!-- Footer -->
    <!-- <div class="footer">
    </div> -->
</body>
</html>