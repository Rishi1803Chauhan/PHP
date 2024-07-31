<?php
class BankAccount{

    function __construct($bank_account,$balance){
        $this->bank_acc = $bank_account;
        $this->bal = $balance; 
    }
    function Withdraw($withdraw){
        if($withdraw1 <= $bal){
            $bal = $deposit-$withdraw;
            echo "Balanace remaining :".$bal."<br/>";
        }
        else{
            echo "Less amount detected";
        }
    }
    function Deposit($deposit){
        $bal = $bal-$deposit;
    }
}
$bank = new BankAccount(239203849,2000);
$bank->withdraw(2050);
$bank->deposit(2000);
$bank->Withdraw(3000);
?>