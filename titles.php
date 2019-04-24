<?php
$x = $_GET['x'];
switch ($x) {
    case '':
        echo "Title for Home page";
        break;
	case 'home':
        echo "Title for Home page";
        break;
    case 'page2':
        echo "Title for Page 2";
        break;
	case 'page3':
        echo "Title for Page 3";
        break;
	default:
		echo "Default Title for when X isn't documented";
		break;
}
?>