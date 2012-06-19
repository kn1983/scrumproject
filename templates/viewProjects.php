<?php
$project = new Project();
$projects = $project->viewProjects();
print_r($projects);	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Projects</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<h1>Projects</h1>
		<ul>
			<li><a href="#">Lorem ipsum</a></li>
		</ul>
	</body>
</html>