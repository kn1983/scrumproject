<?php
if(isset($_POST['submitproject'])){
	$project = new Project();
	$project->create_project();
}
?>
<form id="createproject" method="POST" action="">
	<dl>
		<dt><label for="name">Name</label></dt>
		<dd><input type="text" name="name" id="name" /></dd>

		<dt><label for="description">Description</label></dt>
		<dd><input type="text" name="description" id="description" /></dd>

		<dt><label for="deadline"></label>Deadline</dt>
		<dd><input type="text" name="deadline" id="deadline" /></dd>

		<dt><label for="estimated_time">Estimated time</label></dt>
		<dd><input type="text" name="estimated_time" id="estimated_time" /></dd>

		<dt><label for="customer">Customer</label></dt>
		<dd><input type="text" name="customer" id="customer" /></dd>
	</dl>
	<button type="submit" id="submitproject" name="submitproject">Create</button>
</form>