<h2 class="post-title">Login</h2>
<?php 
    echo "<div class=\"form-container\">
            <form action=\"index.php\" method=\"POST\">
                <h3 class=\"food-title\">username</h3>
                <input class=\"food-input\" type=\"text\" name=\"userid\">


                <h3 class=\"food-title\">password</h3>
                <input class=\"food-input\" type=\"password\" name=\"password\">


                <input type=\"hidden\" name=\"content\" value=\"validate\" >
                <input class=\"btn\" type=\"submit\" value=\"Submit\">
            </form>
        </div>";
?>