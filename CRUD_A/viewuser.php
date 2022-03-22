<?php

use User as GlobalUser;

class ViewUser extends User{

    public function showAlltUser(){
        $datas = $this->geAlltUser();
        foreach ($datas as $data) {
            echo "User Name is :".$data['names']."<br>";
            echo "Email is :".$data['emial']."<br><hr>";
        }
    }

}

?>