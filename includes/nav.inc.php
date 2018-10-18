<h3 class="nav-brand">MyFoods</h3>
<?php 
    if(isset($_SESSION['valid_user'])){
        echo "<ul>
            <li><a class=\"nav-link\" href=\"index.php\">home</a></li>
            <li><a class=\"nav-link\" href=\"index.php?content=newpost\">new post</a></li>
            <li><a class=\"nav-link\" href=\"index.php?content=showlist\">list</a></li>
            <li><a class=\"nav-link\" href=\"index.php?content=newuser\">register</a></li>
            <li><a id=\"logout\" class=\"nav-link\" href=\"index.php?content=logout\">logout</a></li>
        </ul>";
    }else{
        echo "<ul>
            <li><a class=\"nav-link\" href=\"index.php\">home</a></li>
            <li><a class=\"nav-link\" href=\"index.php?content=newpost\">new post</a></li>
            <li><a class=\"nav-link\" href=\"index.php?content=showlist\">list</a></li>
            <li><a class=\"nav-link\" href=\"index.php?content=newuser\">register</a></li>
            <li><a id=\"login\" class=\"nav-link\" href=\"index.php?content=login\">login</a></li>
        </ul>";
    }
    

?>