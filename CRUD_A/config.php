<?php

class DataBaseClass{
    private $host;
    private $username;
    private $password;
    private $dbname;

    protected function connection(){
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "oopcrud";

        $conn = new mysqli($this->host,$this->username,$this->password,$this->dbname);
        return $conn;
    }

}

?>