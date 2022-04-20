<?php

class User extends DataBaseClass{

    protected function geAlltUser(){
        $sql = "SELECT * FROM usertbl";
        $result = $this->connection()->query($sql);

        $numRows = $result->num_rows; // how many results we got in the database

        if($numRows > 0){
            while ($row=$result->fetch_assoc()) {
                $data[]=$row;
            }
            return $data; // which means this can pass on th=o the next class
        }
    }


    public function insertUser($username,$email,$password){
        $sql = "INSERT INTO `usertbl`(`names`, `emial`, `password`) VALUES ('$username','$email','$password')";
        $stm = $this->connection()->query($sql);
        
        if ($stm) {
            echo "Data Inserted";
        }else{
            echo "Data Not Inserted";
        }

    }

}

?>