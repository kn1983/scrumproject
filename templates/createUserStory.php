<?php if(isset($_GET['projectid'])): ?>
	<?php
		if(isset($_POST['createuserstory'])){
			$userstory = new Userstory();
			$userstory->createUserstory();
		}
	?>
	<h1>Create user story</h1>
	<form method="post" action="">
		<dl>
			<dt><label for="name">Name</dt>
			<dd><input type="text" name="name" id="name" /></dd>

			<dt><label for="description">Description</dt>
			<dd><input type="text" name="description" id="description" /></dd>

			<dt><label for="estimated_time">Estimated time</dt>
			<dd><input type="text" name="estimated_time" id="estimated_time" /></dd>

			<input type="hidden" name="project_id" value="<?php echo $_GET['projectid']; ?>" />
		</dl>
		<button type="submit" name="createuserstory">Create user story</button>
	</form>
	<a href="?page=projects&amp;id=<?php echo $_GET['projectid']; ?>">Back to project</a>
<?php endif; ?>
