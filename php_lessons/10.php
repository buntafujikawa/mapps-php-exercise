<?php
//switch 条件分岐

$signal = "red";

switch = ($signal) {
	case "red":
		echo "stop!";
		break;
	case "blue":
	case "green":
		echo "go!";
		break;
	case "yello":
		echo "caution!";
		break;
	default:
		echo "wrong signal!"
}