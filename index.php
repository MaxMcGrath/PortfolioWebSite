<?php

require('header.php');

session_start();

$page=trim($_GET["page"]);

if(empty($page)){
	$page = 'Home';
}

switch($page){
	case "Home":
		require('home.php');
		break;
	case "Information":
		require('eduInfo.php');
		break;
	case "Class Projects":
		require('projects.php');
		break;
	case "Experience":
		require('work.php');
		break;
	case "Resume":
		require('resume.php');
		break;
	case "Hobbies":
		require('hobby.php');
		break;
	case "Contact":
		require('contact.php');
		break;
}

require('footer.php');

?>