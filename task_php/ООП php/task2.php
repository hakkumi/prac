<?

class BankAccount {
    private $balance;
    private $accountnumber;
    
    public function __construct($accountnumber, $balance){
        $this -> accountnumber = $accountnumber;
        $this -> balance = $balance;
    }
    
    public function deposit($amount){
        if ($amount > 0){
            $this -> balance += $amount;
        } else {
            echo "некорректная сумма";
        }
    }
    
    public function withdraw($amount){
        $this -> balance -= $amount;
    }
    
    public function getbalance(){
        return $this->balance;
    }
    
}
$account = new BankAccount(1234, 1000);
$account->withdraw(380);
$account->deposit(500);
echo $account -> getbalance();
