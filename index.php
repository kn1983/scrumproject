<?php
function __autoload($class_name){
	require_once 'classes/' .$class_name. '.class.php';
}

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Value Backlog</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<div id="wrapper">
			<div id="site-logo">
				<a href="index.php">
					<img id="logo" src="images/logo.png" alt="logo" />
				</a>
			</div>
			<nav>
			<ul id="main-menu">
				<li><a href="index.php?page=home">Home</a></li>
				<li><a href="index.php?page=createproject">Create project</a></li>
				<li><a href="index.php?page=projects">View projects</a></li>
				<li><a href="index.php?page=logout">Log Out</a></li>
			</ul>
			</nav>
		<div id="content">
			<?php
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			} else {
				$page = '';
			}

			switch($page){
				case 'createproject':
					require_once('templates/createProject.php');
					break;
				case 'projects';
					require_once('templates/viewProjects.php');
					break;
				case 'createuserstory';
					require_once('templates/createUserStory.php');
					break;
				default:
					echo 'Default page';
			}

			?>
			</div>
		</div>
	</body>
</html>