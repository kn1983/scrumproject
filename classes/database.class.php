<?php

require_once 'database_config.php';

class Database {

	private $connection;

	function __construct() {
		$this->openConnection();
	}

	private function openConnection() {
		$this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
		if (!$this->connection) {
			die('Database connection failed ' . mysql_error());
		}
		else {
			mysql_select_db(DB_NAME, $this->connection)
				or die('Database selection failed. ' . mysql_error());
		}
	}

	public function insertUserStory($args) {
		if (isset($args['estimated_time']) && !$args['estimated_time']) {
			$args['estimated_time'] = 'NULL';
		}
		$query = "INSERT INTO user_story
			VALUES (NULL, '{$args['name']}', '{$args['description']}', {$args['estimated_time']}, NULL, NOW(), NULL, NULL, {$args['project_id']})";
		mysql_query($query) or die(mysql_error());
	}

	public function getUserStory($project_id) {
		$query = "SELECT * FROM user_story
			WHERE project_id = $project_id";
		$stories = mysql_query($query) or die(mysql_error());
		$user_stories = array();
		while ($row = mysql_fetch_assoc($stories)) {
        	array_push($user_stories,
    			array(
	        		'id' => $row['id'],
	        		'name' => $row['name'],
	        	    'description' => $row['description'],
	        	    'estimated_time' => $row['estimated_time'],
	        		'elapsed_time' => $row['elapsed_time'],
	            	'created_date' => $row['created_date'],
	        	    'checkout_by' => $row['checkout_by'],
	                'checkout_date' => $row['checkout_date']
    			)
    		);
		}
		return $user_stories;
	}

	 public function insertProject($args) {
		if (isset($args['estimated_time']) && !$args['estimated_time']) {
			$args['estimated_time'] = 'NULL';
		}
		$query = "INSERT INTO project (name, description, deadline, estimated_time, created_date, customer)
			VALUES ('{$args['name']}', '{$args['description']}', {$args['deadline']}, {$args['estimated_time']}, NOW(), '{$args['customer']}')";
		mysql_query($query) or die(mysql_error());
	 }

	 public function selectProjects(){
	 	$query = "SELECT * FROM project";
	 	$result = mysql_query($query) or die(mysql_error());
	 	if($result){
	 		return $result;
	 		// while($row = mysql_fetch_assoc($result)){
	 		// 	print_r($row);
	 		// }
	 	}
	 }
         
	 public function deleteProject($project_id) {
		
	 }
}