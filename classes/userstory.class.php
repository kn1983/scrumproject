<?php
class Userstory {
	function __construct(){
	}
	public function createUserStory(){
		$cleanArgs = array();
		if(isset($_POST['name'], $_POST['description'], $_POST['estimated_time'], $_POST['elapsed_time'], $_POST['project_id'])){
			foreach($_POST as $key => $val){
				$cleanArgs[$key] = $this->cleanArg($val);
			}
			return $cleanArgs;
		}
	}
	private function cleanArg($arg){
		$cleanArg = strip_tags($arg);
		$cleanArg = mysql_real_escape_string($arg);
		return $cleanArg;
	}
}
?>