<?php
/*
for($i=100000; $i<=999999; $i++)
{
    $num = (string)$i;
    if($num[0]+$num[1]+$num[2] == $num[3]+$num[4]+$num[5])
        {
        $count++;
    }       
}
echo 'Всего счастливых билетов: ' . $count;
 *                                                
 */  #задача про счастливые билеты

/*
$mas = array (
    array (1,2,3),
    array (4,5),
    array (6,7,8,9,10)
    );

$result = array ();
$count = count ($mas);

for ($i = 0; $i < $count; $i++)
{
   $count2 = count ($mas[$i]);
   for ($j = $count2-1; $j >= 0; $j--)
   {
     $result [$i][] = $mas [$i][$j];  
   }
}
echo '<pre>';
print_r($result);
echo '</pre>'; 
 *                                                  
 */  #массиив в обратном порядке

/*
for($i = 0; $i < 5; $i++) {
    if($i == 3) {
       continue; 
    }
    echo $i . ' ';
}
 *                                                        
 */   #прмер работы continue

/*
$arr = array (56, 563, 131, 13, 95);
$count = count($arr)-1;
for ($i = $count; $i >= 0; $i--) {
    for ($j = 0; $j <= ($i - 1); $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $k = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $k;
        }   
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
 *                                           
 */  #сортировка массива по возростанию

/*
$arrayVowel = array('a', 'e', 'i', 'u', 'o', 'y');
$str = 'metallist';
$length = strlen($str);
$countVowelArray = count($arrayVowel);
$countLetterVowel = 0;
$countLetterConsonant = 0;

for($i = 0; $i < $length; $i++) {
    for($j = 0; $j < $countVowelArray; $j++ ) {
        if($str[$i] == $arrayVowel[$j]) {
            $countLetterVowel++;
            break;
        }
        else {
            if($j == $countVowelArray - 1) {
                $countLetterConsonant++;
            }
        }
    }
}
echo 'Кол-во гласных букв - ' . $countLetterVowel;
echo '<br />';
echo 'Кол-во coгласных букв - ' . $countLetterConsonant;
 *                                
 */  #найти гласные и согласные $str = 'metallist'
   
/*
$mas = array (
    array (1,2,3),
    array (4,5),
    array (6,7,8,9,10)
);
$count = count ($mas);
for ( $i = 0; $i  < $count; $i++)
{
    $count2 = count ($mas [$i]);
    $sum = 0;
    for ($j = 0; $j < $count2; $j++)
    {
    $sum += $mas [$i][$j];
    }
    $result [] = $sum/$count2;
}
echo '<pre>';
print_r($result);
echo '</pre>';                                   
 *                                             
 */  #среднее арифметическое массивов

/*              
$mas = array(
   array('metallist','barcelona','milan'), // $j
   array('goverla','dinamo','shahtar','zorya'), //$k
   array('karpati','metalurg','dnipro','oleksandria','poltava') //$d
    );
$count = count ($mas);
$arrayVowel = array('a', 'e', 'i', 'u', 'o', 'y'); // все что !$arrayVowel - согласные 
$length = strlen ($count);
$countVowelArray = count($arrayVowel);
$countLetterVowel = 0;
$countLetterConsonant = 0;
$mas2 = array ( array (),
                array (),
                array ()
                          );

for ( $i = 0; $i < $count; $i++){          // цикл для массива $mas
   for ($j = 0; $j < ; $J++){              // цикля для массива $j
       for ($k = 0; $k < ; $k++){          // цикля для массива $k
          for ($d = 0; $d < ; $d++){       // цикля для массива $d
           $countLetterVowel++; 
       }
   }
}
}


echo 'Кол-во гласных букв - ' . $countLetterVowel;
echo '<br />';
echo 'Кол-во coгласных букв - ' . $countLetterConsonant;
  *           
  */  #массив с сортировкой в массив по гласны и согласным (недоделано)

/*
$arr = array ('first' => 1, 'second' => 34, 'third' => 56, );

foreach ($arr as $key => $value) {
    echo $key . ' => ' . $value . '<br />';
}
 * 
 */   #цикл foreach 

/*
$mas = array (1,2,3,4,5,6); 

$sum = 0;

foreach ($mas as $value) {
    $sum += $value;
}
echo $sum/count ($mas);
 *                          
 */  #Среднее арифметическое массива с функцией foreach

/*
$mas = array (
    array (1,2,3,4),
    array (5,6,7),
    array (8,9,10,11,12)
);
foreach ($mas as $value){
    foreach ($value as $val){
       echo $val . ' '; 
    }
        echo '<br />';
}
 *                
 */  #Среднее арифметическое двумерного массива с функцией foreach

/*
$arr = array(35, 'Metallist', 'key' => -15);

foreach($arr as $key => $value) {
    echo $key . ' => ' . $arr[$key] . '<br />';
}
 * 
 */   #Использование ключей в функции foreach 

/*
$arr = array (1,2,3,4,5);

foreach ($arr as &$value){ 
    $value += 3;
}

echo '<pre>';
print_r ($arr);
echo '</pre>';
 *                                 
 */  #Увеличение массива на 3 с помощью ссылки &

/*
$arr = ['red', 'blue', 'white', 'black'];
print_r( serialize( $arr ) );
 * 
 */   #Serialize

/*
$arr = ['red', 'blue', 'white', 'black'];
$ser = (serialize( $arr ) );
echo '<pre/>';
print_r(unserialize($ser));
 * 
 */   #Unserialize

/*
$homepage = file_get_contents('...');
echo $homepage;
 * 
 */   #File_get_contents

/*
$file = 'people.txt';
$current = file_get_contents($file);
$current .= "John Smith\n";
$fpk = file_put_contents($file, $current);
 * 
 */   #File_put_contents

/*
include 'fruit.php'; // Создается отдельный файл в области видимости
echo "A $color $fruit";
 * 
 */   #Include

/*
require 'fruit.php'; // Создается отдельный файл в области видимости
echo "A $color $fruit";  // require идентично include за исключением того, что
//она остановит выполнение скрипта, тогда как include только выдала бы предупреждение 
//E_WARNING, которое позволило бы скрипту продолжить выполнение.
 * 
 */   #Require

/*
$mas = array(1,2,3,4,5,6);

$var = 10;

if(   in_array($var, $mas)   ) {
    echo 'Exist!!!';
}
else {
    echo 'Not exist';
}
 *                                                                     
 */  #in_array
 
/*
 $mas = array(1,2,3,4,5,6,7);

 $result = array_chunk($mas, 3);

echo '<pre>';
print_r($mas);
echo '</pre>';
 *                                                                 
 */  #array_chunk

/*
$mas = array(2,1,3,4,5,6,7, 1, 1, 2, 7);

$result = array_count_values($mas);

echo '<pre>';
print_r($result);
echo '</pre>';
 *                                                           
 */  #array_count_values

/*
$mas = array_fill(100, 10, array(7,8,9));

echo '<pre>';
print_r($mas);
echo '</pre>'
 *                                                                   
 */   #array_fill

/*
 $mas1 = array(1, 2, 3, 4, 5);
 $mas2 = array(4, 5, 6, 7, 8);
 $result = array_diff($mas1, $mas2);
 echo '<pre>';
 print_r($result);
 echo '</pre>';
 *                                                                   
 */   #array_diff 

/*
 $mas1 = array(1, 2, 3, 4, 5);
 $mas2 = array(4, 5, 6, 7, 8);
 $result = array_intersect($mas1, $mas2);
 echo '<pre>';
 print_r($result);
 echo '</pre>';
 *                                                              
 */   #array_intersect

/*
 $mas1 = array(1, 2, 'str4444'=> 3, 4, 5);
 $result = array_key_exists('str', $mas1);
 echo '<pre>';
 var_dump($result);
 echo '</pre>';
 *                                                               
 */   #array_key_exist

/*
 $mas1 = array(1, 2, 3, 4, 5);
 $result = array_pop($mas1);
 echo '<pre>';
 var_dump($result);
 echo '</pre>';
 * 
 echo '<pre>';
 print_r($mas1);
 echo '</pre>';
 *                                                                     
 */  #array_pop

/*
 $mas1 = array(1, 2, 3, 4, 5);
 $result = array_push($mas1, 222, 555, 777, 888);
 echo '<pre>';
 var_dump($result);
 echo '</pre>';
 *                                                                   
 */   #array_push

/*
 $mas1 = array(1, 2, 3, '2', '3', 5, 7, 8, 9, true);
 $result = array_unique($mas1);
 echo '<pre>';
 print_r($mas1);
 echo '</pre>';
 echo '<pre>';
 print_r($result);
 echo '</pre>';
 *                                                                 
 */  #array_unique

/*
$a = 5;
$b = 10;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo $a;
echo '<br />';
echo $b;
 *                      
 */  #замена переменных местами, без ввода третьей переменной

/*
function printArray($name = 'Спартак')
{
    //$name = 'Металлист';
    echo 'О нас События Продукты Контакты <br />';
    echo '<br />';
    echo $name . ' - чемпион!<br /><br />';
}
$club = 'Динамо';
printArray($club);
 *                              
 */  #лобовое использование создания своей функции

/*
 function sumParams($a, $b)
{
    return $a + $b;
}

$x = 5;
$y = 10;

$c = sumParams($x, $y);

echo $c + 3;
 *                                           
 */  #команда return в создании функции

/*
function sumParams()
{
    $sum = 0;
    foreach(func_get_args() as $param) {
        $sum += $param;
    }
    return $sum;    
}

$x = 5;
$y = 10;
$z = 15;

$c = sumParams($x, $y, $z, 56, 14);

var_dump($c);
 * 
 */  #команда return в создание функции

/*
class Test {
        
   var $height = 1.80;//свойство (их может быть неограниченное колличесвто) 
   var $wight = 60;
   var $color;
   
   //метод
   function getHeight() {
       return $this->height . ' ' . $this->wight;
   }    
}

$b = new Test();
echo $b->getHeight();
 * 
 */  #ООП,свойства,метод,создание функции

/*
class Test {
    var $start = 4;
    
    function __construct() {
        echo $this->start . '<br />';
   } 
}
$a = new Test();
 * 
 */  #ООП.Использование магического метода __construct

/*
class Test {
 
    var $start = 4;
    
    function getA(){
        echo $this->start . '<br />';
    }
    
    function __construct() {
        echo 'Create object!' . '<br />';
    }
       
    function __destruct() {
        echo 'Delete object!'  . '<br />';
    }
}

$a = new Test();
$a->getA();
 * 
 */  #ООП.Использование магического метода __destruct

/*
class Test {
    var $start = 4;
    
    function getA(){
        echo $this->start . '<br />';
    }
    function __call($name, $arguments) {
        echo '<pre>';
        print_r([$name, $arguments]);
        echo '</pre>'; 
    }
}
$a = new Test();
$a->getB(1, 2, 'string');
 * 
 */  #ООП.Использование магического метода __call

/*
class Test {
    var $start = 4;
    
    function getA(){
        echo $this->start . '<br />';
    }
    function __call($name, $arguments) {
        echo '<pre>';
        print_r([$name, $arguments]);
        echo '</pre>';
        echo '<br />';
    }
}
$a = new Test();
$a->getB(1, 2, 'string');
$a->getC(3, 4, 'rtrtrtrt');
 * 
 */  #ООП.Использование магического метода __call

/*
class Test {
    var $start = 4;
    
    function getA($param){
        echo $param . ' ' . $this->start . '<br />';
    }
    function __get($name) {
        echo $name;
    }
}
$a = new Test();
echo $a->notExistProp;
 * 
 */  #ООП.Использование магического метода __get

/*
class Test {
    var $start = 4;
    function __set($name, $value)
    {
        echo '<pre>';
        print_r([$name, $value]);
        echo '</pre>';
    } 
}
$a = new Test();
$a->nonExistProp = 56;
 * 
 */  #ООП.Использование магического метода __set

/*
class Test {
    var $start = 4;
   
    function __isset($name)
    {
        echo 'Try to check variable "nonExistProp"';
    }    
}
$a = new Test();
if(isset($a->nonExistProp)) {
    echo 'Hello, world!';
}
 * 
 */  #ООП.Использование магического метода __isset

/*
class Test {
 
    var $start = 4;
    
    var $year = 1990;
    
    function __isset($name)
    {
        echo 'Try to check variable "nonExistProp"';
    }
    
    //getter
    function getYear()
    {
        return $this->year;    
    }
    
    //setter
    function setYear($value)
    {
        $this->year = $value;
    }
}

$a = new Test();

//echo $a->year;
echo $a->getYear();

//$a->year = 2000;
$a->setYear(2000);

echo '<br />';
echo $a->getYear();
 * 
 */  #ООП.Использование setter & getter

/*
class Machine
{
    var $year = 1990;
    var $color = 'white';
    
    function getYear()
    {
        return $this->year;
    }
    function getColor()
    {
        return $this->color;
    }
    function getMessage($name)
    {
        echo $name . 'From Machine <br />';
    }
}

class Auto extends Machine
{
    var $type;
    var $engineType;
    
    function getType()
    {
        return $this->type;
    }
    function getEngineType()
    {
        return $this->engineType;
    }
    function getMessage()
    {
        echo parent::getMessage('Masha');
    }
}
$auto = new Auto();
echo $auto->getMessage();
 * 
 */  #ООП.Наследование.Использование parent

/*
class Machine
{
    public $year = 1990;
    public $color = 'white';
    private $_distance = 10000;
    
    public function getYear()
    {
        return $this->year;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getMessage($name)
    {
        echo $name . 'From Machine <br />';
    }
    public function getDistance()
    {
        return $this->_distance;
    }        
}

class Auto extends Machine
{
    public $type;
    public $engineType;
    
    public function getType()
    {
        return $this->type;
    }
    public function getEngineType()
    {
        return $this->engineType;
    }
    public function getMessage()
    {
        echo parent::getMessage('Masha');
    }
    public function getDistanceFromAuto()
    {
        return $this->_distance;
    }
}
//$machine = new Machine();
//echo $machine->getDistance();
//$auto = new Auto();
//echo $auto->getDistanceFromAuto();
$auto = new Auto();
echo $auto->getDistance();
 * 
 */  #ООП.Инкапсуляция. public, privat

/*
class Machine
{
    public $year = 1990;
    public $color = 'white';
    private $_distance = 10000;
    private $_usage = '10L';
    
    public function getYear()
    {
        return $this->year;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getMessage($name)
    {
        echo $name . 'From Machine <br />';
    }
    public function getDistance()
    {
        return $this->_distance;
    }        
    
}

class Auto extends Machine
{
    public $type;
    public $engineType;
    
    public function getType()
    {
        return $this->type;
    }
    public function getEngineType()
    {
        return $this->engineType;
    }
    public function getMessage()
    {
        echo parent::getMessage('Masha');
    }
    public function getDistanceFromAuto()
    {
        return $this->_distance;
    }
    public function getUsage()
    {
        return $this->_usage;
    }        
}
$auto = new Auto();
echo $auto->getUsage();
 * 
 */  #ООП.Инкапсуляция. public, privat

/*
class Machine
{
    public $year = 1990;
    public $color = 'white';
    private $_distance = 10000;
    private $_usage = '10L';
    
    public function getYear()
    {
        return $this->year;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getMessage($name)
    {
        echo $name . 'From Machine <br />';
    }
    public function getDistance()
    {
        return $this->_distance;
    }        
    
}

class Auto extends Machine
{
    public $type;
    public $engineType;
    
    public function getType()
    {
        return $this->type;
    }
    public function getEngineType()
    {
        return $this->engineType;
    }
    public function getMessage()
    {
        echo parent::getMessage('Masha');
    }
    public function getDistanceFromAuto()
    {
        return $this->_distance;
    }
    public function getUsage()
    {
        return $this->_usage;
    }        
}
$auto2 = clone $auto;
$auto2->setEngineType('electric');

if($auto === $auto2)
{
    echo 'The same!';
}
else {
    echo 'Different!';
}
 * 
 */  #ООП. Использование функции clone + сравнение 2х объектов

/*
abstract class Machine
{
     public $x = 0;
     public $y = 0;
     
     abstract public function move($x, $y, $z);
}
class Car extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
class Tractor extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->x = $x/2;
        $this->y = $y/2;
    }
}
class SportCar extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->x = $x * 2;
        $this->y = $y * 2;
    }
}
class Plane extends Machine
{
    public $z = 0;
    public function move($x, $y, $z)
    {
        $this->x = pow($x, 2);
        $this->y = pow($y, 2);
        $this->z = pow($z, 2);
    }
}
$car = new Car();
$car->move(5, 10);
$tractor = new Tractor();
$tractor->move(5, 10);
$sportCar = new SportCar();
$sportCar->move(5, 10);
$plane = new Plane();
$plane->move(5, 10, 15);
echo '<pre>';
print_r($car);
print_r($tractor);
print_r($sportCar);
print_r($plane);
echo '</pre>';
 * 
 */  #ООП.Полиморфизм

/*
abstract class Machine
{
     public $x = 0;
     public $y = 0;
    
     abstract public function move($x, $y, $z);
}
class Car extends Machine
{
    public function move($x, $y, $z = 0)
    {
       $this->_calcSpeed($x, $y);
    }
    private function _calcSpeed($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
class Tractor extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->_calcSpeed($x, $y);
    }
    private function _calcSpeed($x, $y)
    {
        $this->x = $x / 2;
        $this->y = $y / 2;
    }
}
class SportCar extends Machine
{
    public function move($x, $y, $z = 0)
    {
        $this->_calcSpeed($x, $y);
    }
    private function _calcSpeed($x, $y)
    {
        $this->x = $x * 2;
        $this->y = $y * 2;
    }        
}
class Plane extends Machine
{
    public $z = 0;
    public function move($x, $y, $z)
    {
        $this->_calcSpeed($x, $y, $z);
    }
    private function _calcSpeed($x, $y, $z)
    {
        $this->x = pow($x, 2);
        $this->y = pow($y, 2);
        $this->z = pow($z, 2);
    }
}
$car = new Car();
$car->move(5, 10);
$tractor = new Tractor();
$tractor->move(5, 10);
$sportCar = new SportCar();
$sportCar->move(5, 10);
$plane = new Plane();
$plane->move(5, 10, 15);
echo '<pre>';
print_r($car);
print_r($tractor);
print_r($sportCar);
print_r($plane);
echo '</pre>';
 * 
 */  #ООП.Полиморфизм. Использование функции _calc

/*
class Test
{
    private static $_instance;
    
    public static function getInstance() {
        if(self::$_instance === NULL) {
            self::$_instance = new Test();
            return self::$_instance;
        }
        else {
            return self::$_instance;
        } 
    }
    
    private function __construct()
    {
        
    }
    
    private function __clone()
    {
        
    }
}

$obj = Test :: getInstance();
$obj2 = clone $obj;
if($obj === $obj2)
{
    echo 'Same object';
}
else {
    echo 'Different object';
}
 * 
 */  #SingleTon

/*
$a = 0;
class MyException extends Exception {

}
try {
    if($a == 0) {
        throw new Exception('Error', 35);
}
    if($a == 35) {
        throw new MyException('Error', 35);
    }
}
catch(MyException $e) {
    echo $e->getMessage() . ' timeout' . '<br />';
}
catch(Exception $e)   {
    echo $e->getMessage() . ' connected' . '<br />';
}
 * 
 */  #Exeption с правильным приоритетом

/*
$a = 35;
class MyException extends Exception {

}
try {
    if($a == 0) {
        throw new Exception('Error', 35);
}
    if($a == 35) {
        throw new MyException('Error', 35);
    }
}

catch(Exception $e)   {
    echo $e->getMessage() . ' connected' . '<br />';
}
// В этом случае нарушен приоритет exeption и всегда будет выдавать, не зависимо
// от параметра 0 или 35, error connected. Более глобальный (общий) exeption  
// должен идти всегда в конце
catch(MyException $e) {
    echo $e->getMessage() . ' timeout' . '<br />';
}
 * 
 */  #Exeption с неправильным приоритетом























