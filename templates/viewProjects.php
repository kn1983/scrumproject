<?php
$project = new Project();
$projects = $project->viewProjects();
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
			<?php while($row = mysql_fetch_assoc($projects)): ?>
				<li><a href="?project=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
			<?php endwhile ?>
		</ul>
	</body>
</html>