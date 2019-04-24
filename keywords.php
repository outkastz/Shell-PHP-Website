<?php
$x = $_GET['x'];
switch ($x) {
    case '':
        echo "Keywords,for,home,page,in,comma,separated,values";
        break;
    case 'home':
        echo "Keywords,for,home,page,in,comma,separated,values";
        break;
    case 'page2':
        echo "Keywords,for,page,2,in,comma,separated,values";
        break;
	case 'page3':
        echo "Keywords,for,page,2,in,comma,separated,values";
        break;
	default:
		echo "Default,keywords,for,when,x,isn't,documented,in,comma,separated,values";
		break;
}
?>