<?php

// class Bank{
//     public $accno;
//     public $name;
//     public $balance=0;
//     public $amt;

//     public function depositAmount($amt){

//         if(is_numeric($amt)){
//             echo "you bave been creadited".$amt."<br>";
//              $this->balance=$this->balance+$amt;
//              echo "account no:".$this->accno."  
//              .New balance of rwf".number_format($this->balance,2)."<br>";
//         }else {
//             return "Enter a numeric Value";
//         }
//         return $this;
//     }

//     public function deductAmount($amt){
//         if ($this->balance >=$amt) {
            
//             echo "you bave been creadited".$amt."<br>";
//             $this->balance=$this->balance-$amt;
//             echo "you have been dedited on: ". $this->accno." where amount is".$this->balance." <br>";
//         }else {
//             echo "there is no founds!";
//         }
//         return $this;
//     }
//     public function checkBalance(){
//         echo "your accout ".$this->accno . 
//         " where new balance is: ". $this->balance."<br>";
//     }


//     public function operation(){
//         return $this;
//     }
// }



// $bank = new Bank();
// $bank->accno ="202020";
// $bank->name="Enock";
// $bank->balance=2;
// $bank->checkBalance(); 
// $bank->depositAmount(400);  //ok
// $bank->deductAmount(200);
// $bank->checkBalance();   //ok




// class User extends Bank{
   
//     public $name="Moussa";
//     public $acc;
//     public $balance;
     
    
// }

// $user= new User();
// $user->checkBalance();




class Peaple{
    public function __toString(){

    }
    public function Display(){
            echo "Welcome";
    }
}


$obj= new Peaple();
echo $obj;
$obj->Display();

?>


