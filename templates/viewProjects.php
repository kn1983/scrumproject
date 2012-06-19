<?php
$project = new Project();
$projects = $project->viewProjects();
?>
<? if(isset($_GET['id'])){ ?>
	<?php 
		$id = $_GET['id'];
		$db = new Database(); 
		$userStories = $db->getUserStory($id);
	?>
	<h2>Userstories</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Estimated time</th>
				<th>Elapsed time</th>
				<th>Created date</th>
				<th>Checkout by</th>
				<th>Checkout date</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($userStories as $key => $story): ?>
				<tr>
					<td><?php echo $story['name']; ?></td>
					<td><?php echo $story['description']; ?></td>
					<td><?php echo $story['estimated_time']; ?></td>
					<td><?php echo $story['elapsed_time']; ?></td>
					<td><?php echo $story['created_date']; ?></td>
					<td><?php echo $story['checkout_by']; ?></td>
					<td><?php echo $story['checkout_date']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="?page=createuserstory&amp;projectid=<?php echo $id;?>">Create user story</a>
<?php } else { ?>
	<h1>Projects</h1>
	<ul>
		<?php while($row = mysql_fetch_assoc($projects)): ?>
			<li><a href="?page=projects&amp;id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
		<?php endwhile; ?>
	</ul>
<?php } ?>