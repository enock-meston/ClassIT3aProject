<?php

class Animal{

private $family ="";
private $food ="";

public function __construct($family,$food)
    {
        $this->family=$family;
        $this->food=$food;
   
}

public function get_family(){
    return $this->family;

}

public function set_family($family){
    $this->family=$family;

}

public function get_food(){
    return $this->food;
}

public function set_food($food){
    $this->food=$food;
}


}



class Cow extends Animal{
    private $owner;
    private $family ="";
    private $food ="";
    public function __construct($family,$food)
    {
        $this->family=$family;
        $this->food=$food;
    }
public function get_owner(){

    }
public function set_owner($family){

    }
}



class Lion extends Animal{

    public function __construct($family,$food)
    {

    }
}





$animal1= new Lion("domestic","meat");
$animal1->set_family("wild");
echo $animal1->get_family();
?>