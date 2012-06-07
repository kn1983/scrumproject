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
    var $create_date;
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
        $this->create_date = 0;
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
    
    function select_project_fields() {
        
    }


    /**
     * Update the project fields into the database
     *  
     */
    
    function update_project() {
        
    }
    
    /**
     * Function to create new project 
     *  
     */
    
    function create_project() {
        
    }
    
    /**
     * Function to delete project from the system
     *  
     */
    
    function delete_project(){
        
    }
    
    
    
}
?>