<?php
function __autoload($class_name){
	require_once 'classes/' .$class_name. '.class.php';
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Value</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<div id="header">
			<div class="site-logo">
				<a href="index.php">VALUE</a>
			</div>
			<ul id="main-menu">
				<li><a href="index.php?page=home">Home</a></li>
				<li><a href="index.php?page=createproject">Create project</a></li>
				<li><a href="index.php?page=projects">View projects</a></li>
				<li><a href="index.php?page=logout">Log Out</a></li>
			</ul>
		</div>
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
				default:
					echo 'Default page';
				}

			?>
		</div>
	</body>
</html>