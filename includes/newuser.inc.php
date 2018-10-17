<h2 class="post-title">Register</h2>
<?php 
    echo "<div class=\"form-container\">
            <form action=\"index.php\" method=\"POST\">
                <h3 class=\"food-title\">username</h3>
                <input class=\"food-input\" type=\"text\" name=\"userid\">

                <h3 class=\"food-title\">email</h3>
                <input class=\"food-input\" type=\"text\" name=\"email\">

                <h3 class=\"food-title\">password</h3>
                <input class=\"food-input\" type=\"text\" name=\"password\">

                <h3 class=\"food-title\">confirm password</h3>
                <input class=\"food-input\" type=\"text\" name=\"password2\">

                <input type=\"hidden\" name=\"content\" value=\"adduser\" >
                <input class=\"btn\" type=\"submit\" value=\"Submit\">
            </form>
        </div>";
?>