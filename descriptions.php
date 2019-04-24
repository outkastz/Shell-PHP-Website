<?php
$x = $_GET['x'];
switch ($x) {
    case '':
        echo "Description for Home page";
        break;
    case 'home':
        echo "Description for Home page";
        break;
    case 'page2':
        echo "Description for Page 2";
        break;
	case 'page3':
        echo "Description for Page 3";
        break;
	default:
		echo "Default description for when X isn't documented";
		break;
}
?>