<?php    
interface Animal{
    public function eat();
    public function walk();
    public function makesound();
}
// =============DomesticAnimal===========

class DomesticAnimal implements Animal{
    public function eat(){
        echo "hello from eatMethod in domestocMethod";
    }
    public function walk(){
        echo "hello from eatMethod in domestocMethod";
    }
    public function makesound(){
        echo "hello from eatMethod in domestocMethod";
    }
}

//  child classes from Domestic Animal

class CarnivalAnimal extends DomesticAnimal{
    
}

class Non_CarnivalAnimal extends DomesticAnimal{
    
}

// ==============WildAnimal ==========

class WildAnimal implements Animal{
    public function eat(){
        echo "hello from eatMethod in WildAnimal";
    }
    public function walk(){
        echo "hello from walkMethod in WildAnimal";
    }
    public function makesound(){
        echo "hello from makesoundMethod in WildAnimal";
    }
}

//  child classes from WildAnimal Animal

class CarnivalAnimalWild extends WildAnimal{

}

class Non_CarnivalAnimalWild extends WildAnimal{
    
}














?>