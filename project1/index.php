<?php
$a = 10;
echo "in \" \" : $a </br>";
echo 'in \' \': $a</br>';

$str1 = "I love ";
$str2 = "PHP";
$str3 = $str1.$str2;
echo $str3."</br>";

$strnum = "000";
$bool = true;
echo "concatenation: ".$strnum.$bool."</br>";
echo "plussing: ".($strnum+$bool)."</br>";


$var = 'name';
$name = 'php';

echo "power of $: ".$$var.'</br>';

$arr = array(1, 2, 3, 4, 5);
foreach ($arr as $a) {
    echo $a."</br>";
}
$hesharr = array(
    name => "phone",
    cost => 5000,
    is => true
);
foreach ($hesharr as $key => $val) {
    echo "[$key] $val"."</br>";
}
$basestr = "one, two, three, four, five";
$broken = explode(",", $basestr);
foreach ($broken as $key => $val) {
    echo "[$key] $val"."</br>";
}
$newstr = implode(',', $broken);
echo "after implode: ".$newstr."</br>";

class A {
    function __construct($v = 0) {
        echo "In A constructor</br>";
    }
    function __destruct() {
        echo "In A destructor</br>";
    }
}
class B extends A {
    function __construct($v = 0) {
        parent::__construct();
        echo "In B constructor</br>";
    }
    function __destruct() {
        parent::__destruct();
        echo "In B destructor</br>";
    }
}
$ob = new B;


class SingleClass {
    private $m_value;
    private static $s_instance = null;
    private function __construct($v = 0) {
        $this->m_value = $v;
        echo "In constructor ". __CLASS__ ."</br>";
    }
    function __destruct() {
        print "Уничтожается " . __CLASS__  . "\n";
    }
    function get_value() {return $this->m_value;}
    function set_value($v) { $this->m_value = $v;}
    static function instance() {
        if (!self::$s_instance) {
           self::$s_instance = new static; //SingleClass
        }
        return self::$s_instance;
    }
}
class Child extends SingleClass {
    private $val;
    function set_val($v) {
        $this->val = $v;
    }
    function __construct() {
        echo "in constructor ".__CLASS__."</br>";
    }

    function get_val() {
      return $this->val;
    }
}
$p = Child::instance();
$p->set_val("set");
echo $p->get_val()."</br>";

$p->set_value(888);
echo $p->get_value()."</br>";

?>



