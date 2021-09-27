<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class DbConfig 
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'clinic';
    
    public $connection;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->connection) {
                echo 'Connection cannot be established!';
                exit;
            }            
        }    
        
        return $this->connection;
    }
}
?>