<?php
 $x = $_GET['x'];
if ($x == "" or $x == "index" or $x == "home") { 
    include("site/home.php");
} elseif ($x == "page2") {
    include("site/page2.php");
} elseif ($x == "page3") {
    include("site/page3.php");
} else {
    include("site/home.php");
}
?>