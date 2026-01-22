<?php
    class Bankaccount {
        
private int $balance ;


   public function __construct(int $balance) {
            $this->balance = $balance;
          

        }

        public function getBalance():int {
            return $this->balance;


        }
     


        public function setBalance($newbalance): void {
             if ($newbalance < 0) {
            throw new InvalidArgumentException("Prix négatif interdit");
            
        }
        else{
        $this->balance = $newbalance;
      
        }

        }

       

public function deposit($amount):void {
        $this->setBalance($this->getBalance()+$amount) ;
        echo$this->getBalance();

}
       

public function withdraw($amount):void {
    $this->setBalance($this->getBalance()-$amount) ;
    echo $this->getBalance();

}



}
    
$montant=new Bankaccount(1000);
$montant->deposit(200);
$montant->withdraw(400);


   
?>