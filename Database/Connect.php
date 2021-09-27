<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'Constant.php';
 //CRUD --CREATE,RETRIEVE ,UPDATE AND DELETE
class Connect extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }
    //Method for retriving data from the database
    public function getData($query)
    {        
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
        //inserting data to the database
    public function execute($query) 
    {
        $result = $this->connection->query($query);
        
        if ($result == false) {
            // echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }
    //Method to delete data from the database
    public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->connection->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
 
}
?>