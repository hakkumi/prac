<?

class User {
    protected $age;
    protected $login;



  
    public function __construct($login, $age = 18) {
        $this->login = $login;
        $this->setAge($age);
    }



  
    public function setAge($age) {
        if ($age < 18) {
            echo "Возраст должен быть не меньше 18\n";
            return;
        }
        $this->age = $age;
    }
}



class Client extends User {
    protected $city;
    protected $maxPayment;

    public function __construct($login, $city, $maxPayment, $age = 18) {
        parent::__construct($login, $age);
        $this->city = $city;
        $this->maxPayment = $maxPayment;
    }

    public function getCity() {
        return $this->city;
    }

    public function getMaxPayment() {
        return $this->maxPayment;
    }

    public function checkAge() {
        return $this->age >= 18;
    }
}




class Master extends User {
    protected $cities;
    protected $minPayment;

    public function __construct($login, $cities, $minPayment, $age = 18) {
        parent::__construct($login, $age);
        $this->cities = $cities;
        $this->minPayment = $minPayment;
    }

    public function findClients(array $clients) {
        $result = [];

        foreach ($clients as $client) {
            if (
                in_array($client->getCity(), $this->cities) &&
                $client->getMaxPayment() >= $this->minPayment &&
                $client->checkAge()
            ) {
                $result[] = $client;
            }
        }

        return $result;
    }
}




$client_1 = new Client('client_1', 'Тула', 500);
$client_2 = new Client('client_2', 'Щекино', 1500);
$client_3 = new Client('client_3', 'Москва', 1200);

$master_1 = new Master('master_1', ['Тула', 'Щекино', 'Алексин'], 1000);

var_dump($master_1->findClients([$client_1, $client_2, $client_3]));
