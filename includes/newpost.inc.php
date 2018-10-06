<h2 class="post-title">Add new meal</h2>
<?php 
    echo "<div class=\"form-container\">
            <form action=\"index.php\" method=\"POST\">
                <h3 class=\"food-title\">Food Name:</h3>
                <input class=\"food-input\" type=\"text\" name=\"name\">
                <h3 class=\"food-title\">Notes:</h3>
                <textarea type=\"text\" name=\"description\"></textarea>
                <input type=\"hidden\" name=\"content\" value=\"addpost\" >
                <input class=\"btn\" type=\"submit\" value=\"Submit\">
            </form>
        </div>";
?>