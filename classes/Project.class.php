<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Valeu_backlog create Agile projectbacklogs for customers
 * 
 * @description Project class to create, edit, delete projects from the system * 
 * @author Sam Almendwi
 * @version 1.0
 */

require_once('database.class.php');

class Project {
    /** @var int project id */
    var $id;
    /** @var string project name */
    var $name;
    /** @var varchar description */
    var $description;
    /** @var date The deadline */
    var $deadline;
    /** @var int estimated_time */
    var $estimated_time;
    /** @var date create_date */
    var $created_date;
    /** @var vachar customer */
    var $customer;
    
    /**
     * Constructor - Note that the constructor doesn't set up the variables,
     * but merely sets all of them to 0. This is because the constructor
     * cannot return false in case of a failed system call. To properly
     * initiate this object, use the update() function.
     *
     */
    
    function __construct() {
        $this->id = 0;
        $this->name = "";
        $this->description = "";
        $this->deadline = 0;
        $this->estimated_time = 0;
        $this->created_date = 0;
        $this->customer = "";
    }
    
    /**
     * Function to select the needed project from the database
     *  
     */
    
    function select_project() {
        
    }
    
    /**
     * Function to select the needed project fields from the database
     *   
     */
    
    private function select_project_fields($id) {
        
        
    }


    /**
     * Update the project fields into the database
     *  
     */
    
    public function update_project($id) {
        
    }
    
    /**
     * @param type $cleanArgs
     * @return clean array of args to database.class  
     */
    
    public function create_project() {
        $cleanArgs = array();
        if(isset($_POST['name'], $_POST['description'], $_POST['deadline'], $_POST['estimated_time'], $_POST['customer'])){
            if(is_numeric($_POST['estimated_time']) && is_numeric($_POST['deadline'])){
                    foreach($_POST as $key => $val){
                            $cleanArgs[$key] = $this->cleanArg($val);
                    }
                    $db = new Database();
                    $db->insertProject($cleanArgs);
            }
        }
        
    }
    
    /**
     * @param $this->id 
     * @return project id to be deleted
     */
    
    public function delete_project(){
        if (isset($_POST['delete_project']) && $_POST['id']){
           if(is_numeric($_POST['id'])){
              $_POST['id'] = $this->id;
              $db = new Database();
              $db->deleteProject($this->id);
           } 
        }
    }
    public function viewProjects(){
        $db = new Database();   
        
    }
    
    /**
     *
     * @param type $arg
     * @return type array $cleanArgs 
     */
    
    private function cleanArg($arg){
		$cleanArg = strip_tags($arg);
		$cleanArg = mysql_real_escape_string($arg);
		return $cleanArg;
    }    
}
?>