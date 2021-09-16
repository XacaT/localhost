<?php
require "vendor/autoload.php";
// for ($i = 20; $i <= 40; $i++) {
//     print_r($i);
// }

// $a1 = array();
// $a2 = array();

// for ($i = 20; $i <= 40; $i++) {
//     switch (true) {
//         case $i % 2 == 0: $a1[] = $i;
//             break;
//         case $i % 2 != 0: $a2[] = $i;
//             break;
//     };
// };

// print_r($a1);
// echo "<br>";
// print_r($a2);


// for ($i = 100; $i > 0; $i--) {
//     if ($i % 3 == 0) {
//         echo "<pre>";
//         print_r ($i);
//         echo "</pre>";
//     };
// };

//  $arr = 'John';
//  foreach ($arr as $key => $value) {
//      print_r ($key);
//  };


// $users = array(
//         1 => array(
//             'name' => 'Aleksei',
//             'lastname' => 'Petrov',
//             'age' => 30
//         ),
//         2 => array(
//             'name' => 'Andrey',
//             'lastname' => 'Ivanov',
//             'age' => 49
//         ),
//         3 => array(
//             'name' => 'John',
//             'lastname' => 'Smith',
//             'age' => 74
//         )
        
// );

// foreach ($users as $key => $value){
//     if (is_array($value)){
//         foreach ($value as $k => $v) {
//             if ($k == 'age' && ($v > 20 && $v < 50)){
//                 $users[$key]['work'] = 'true';
//             };
//         };
//     };
// };
// echo "<pre>";
// print_r($users);
// echo "</pre>";


// $arr = array(1, 55,24,66,38,91,10);
// $a = 0;
// foreach($arr as $key){
//     $a++;
// };
// foreach ($arr as $key){
//     for ($i = 0; $i < $a-1; $i++) {
//         if($arr[$i] > $arr[$i + 1]){
//             $temp = $arr[$i];
//             $arr[$i] = $arr[$i + 1];
//             $arr[$i + 1] = $temp;
//         };
//     };
// };
// echo "<pre>";
// print_r ($arr);
// echo "</pre>";

// $a = 1;
// $b = 2;
// $c = 0;
// function t1 ($var1, $var2) {
//     global $c;
//     $c = $var1 + $var2;
// };

// t1($a,$b);
// print_r($c);

// function t1 ($a,$b) {
//     if ($a > $b) {
//         return true;
//     } elseif ($a < $b ){
//         return false;
//     } else {
//         return "$a,$b";
//     } ;
// };

// var_dump (t1 (4,8));

// function t1 ($w,$b) {
//     return "$w $b";
// };
// $a = t1 ('Hello','12414');
// print_r ($a);

// function cube ($x){
//     $res = 1;
//     for ($i = 0; $i < 3; $i++){
//         $res *= $x;
//     };
//     return $res;
// }

// echo "<pre>";
// print_r (cube(2));
// echo "</pre>";

?>

<?
/*
if (isset($_POST["name"])) {
    if (empty ($_POST["name"])){
        $nameErr = "Имя обязательно";
    } else {
        $name = $_POST["name"];
    };
    
};
if (isset($_POST["age"])){
    if (empty ($_POST["age"])){
        $ageErr = "Имя обязательно";
    } elseif ($_POST["age"] < 16){
        $ageErr = "Возраст должен быть больше 16";
    }
      else {
        $age = $_POST["age"];
    };
};

if (isset($_POST["pass"]) && isset($_POST["valpass"])) {
    if (($_POST["pass"] !== $_POST["valpass"])){
        $passErr = "Неверный пароль";
        $valpassErr = "Неверный пароль";
    } elseif (empty($_POST["pass"]) || empty($_POST["valpass"])){
        $passErr = "Поле не заполнено";
        $valpassErr = "Поле не заполнено";
    } else {
        $x = true;
    };
};

if ($x && $age && $name){
    file_put_contents('user.txt', $name.":".$age.",", FILE_APPEND);
};



?>

<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<meta charset="utf-8" />

<form action="" method="POST">
    <p>Введите имя:<br> 
    <input type="text" name="name" value ="<?= $name; ?>" /> <?= $nameErr;?>
    </p>

    <p>Введите возраст:<br> 
    <input type="number" name="age" value ="<?= $age; ?>"/> <?= $ageErr;?>
    </p>

    <p>Введите пароль: <br> 
    <input type="password" name="pass" value ="<?= $pass ?>" /> <?= $passErr;?>
    </p>

    <p>Подтвердите пароль: <br> 
    <input type="password" name="valpass" value ="<?= $valpass ?>" /> <?= $valpassErr;?>
    </p>

    <p> Книги: <br>
    <select>
        <option>Пункт 1</option>
        <option>Пункт 2</option>
    </select>

    <p><input type="submit" />
    </p>

</form>
</body>
</html>
*/

/*
class Home {
    public $wallColor = 'white';
    public $window = 1;
    public function changeWindow($a) {
        $this -> window = $a;
    }
    public function setWall ($b) {
        $this -> wallColor = $b;
    }
}

$home1 = new Home();
//$home1 -> wallColor = 'red';
$home1 -> window = 4;
$home1 -> flor = true;
$home1 -> setWall('green');


$home2 = new Home();
$home2 -> wallColor = 'yellow';
$home2 -> window = 7;

// print_r ($home1);
*/
/*
class Car {
    private $carColor;
    private $carRpm;
    private $carWheel;

    public function __construct($color,$rpm, $wheel){
        $this -> carColor =  $color;
        $this -> carRpm =  $rpm;
        $this -> carWheel =  $wheel;
    }

    public function ride (){
        echo "Вроде едет";
    }
}

$car1 = new Car("red", 2500, 4);
$car1 -> ride();
*/




/*
interface Payment {
    public function pay();
}

class Cash implements Payment {
    public function pay() {
        return "вы оплатили наличкой";
    }
}

class NoCash implements Payment{
    public function pay(){
        return "вы оплатили картой";
    }
}

class Halva implements Payment{
    public function pay(){
        return "вы оплатили кредиткой";
    }
}

class Basket {
    private $payService;
    public function __construct(Payment $payService){
        $this->payService = $payService;
    }
    public function get_service (){
        return $this->payService->pay();
    }
}

$cash = new Basket(new halva);
print_r($cash->get_service());
*/
/*
interface IRobot{
    public function ChoseRobot();
}
interface IWeapon{
    public function Shoot();
}
interface IReactor{
    public function ChoseReactor();
}



class Factory{
    private $type;
    private $reactor;
    private $weapon;
    public function ChoseRobot(RobotType $type ){
        $this->type = $type;
        return $this;
    }
    public function SetReactor(Reactor $reactor){
        $this->reactor = $reactor;
        return $this;
    }
    public function SetWeapon(Weapon $weapon){
        $this->weapon = $weapon;
        return $this;
    }

    public function rel () {
        return [
            't1' => $this->type,
            't2' => $this->reactor,
            't3' => $this->weapon
        ];
    }

}


class RobotType {
    private $type;
    public function __construct ($type){
        $this->type = $type;
    }
}
class Weapon implements IWeapon {
    private $weapon;
    public function __construct($weapon){
        $this->weapon = $weapon;        
    }
    public function Shoot(){
        return 'Fire!!! -------->';
    }
}
class Reactor {
    private $reactor;
    public function __construct($reactor){
        $this->reactor = $reactor;        
    }
}




$t1 = new RobotType('desept');
$t2 = new Weapon('rocket');
$t3 = new Reactor('Nuclear');

$fact = new Factory();

$trans = $fact ->ChoseRobot($t1)->SetReactor($t3)->SetWeapon($t2)->rel();

print_r($trans);

*/
/*
abstract class Weapon {
    public $ammo;
    public function __construct() {
        $this->reload();
    }
    public function reload() {
        $this->ammo = 1000;
    }
    abstract public function shut();
}

class Nuclear extends Weapon {
    public function shut(){
        echo 'Bam ';
        $this->ammo--;
    }
}

$factory = new Nuclear;


$factory->shut();
$factory->shut();
$factory->shut();
$factory->shut();
$factory->shut();
print_r($factory->ammo);
*/

/*
interface Social{
    public function login($log);
    public function pass($pss);
}


class FaceBook implements Social{
    public function login($log){
        echo 'Your FaceBook login ' . $log;
    }
    public function pass($pss){
        echo 'Your FaceBook password ' . $pss;
    }
}

class VK implements Social{
    public function login($log){
        echo 'Your VK login ' . $log;
    }
    public function pass($pss){
        echo 'Your VK password ' . $pss;
    }
}

class SocialHub {
    public $socHub;
    public function __construct(Social $t1){
        $this->socHub = $t1;
    }
}

$test = new SocialHub(new FaceBook);

print_r($test->socHub->pass('125637'));
*/


/*
function str ($a,$b){
    if($a !== $b){
        throw new Exception ('Эти строки не равны');
    }
    echo "Всё хорошо" ;
}



try {
    echo str ('Первая строка', 'Первая строка');
    echo '</br>';
    echo str (1,2);
} catch (Exception $e) {
    echo ($e->getMessage());
}
*/
/*
function inverse($x) {
    if (!$x) {
        throw new Exception('Деление на ноль.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}

// Продолжение выполнения
echo "Привет, мир\n";
*/
/*
$str = ' qwe rty';
function split ($str){
    $res = [];
    if (strlen($str) <= 1){
        return [];
    }
    else if ((strlen($str)) % 2 !== 0){
        $str = $str . '_';
        $res = str_split ($str,2);
    } else {
        $res = str_split ($str,2);
    }
    return str_replace(' ','_',$res);
        
}   
dump (split($str));
*/

class FormBuilder {
    protected $method = 'POST';
    protected $action;
    public $form;

    public function start () {
        $this->form = '<form method="'.$this->method.'" action ="' . $this->action.'"';
    }
    //public function add ($type, array $params) {}
    //public function end () {}

}
$a = new FormBuilder;
$a->start();
dump ($a->form);

?>













