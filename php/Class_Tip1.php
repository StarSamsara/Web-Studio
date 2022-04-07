<title> Class </title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<?php show_source(__FILE__); ?>
<?php
//1、=>的用法
//在php中数组默认键名是整数，也可以自己定义任意字符键名（最好是有实际意义），如：　
$css = array('style' => '0', 'color' => 'green');
echo $css['style'] . '<br>' . $css['color'] . '<br>';
?>
<?php
//2、->的用法
//->用来引用对象的成员（属性与方法）；
$arr = ['a' => 123, 'b' => 456]; //数组初始化
echo $arr['a'] . '<br>'; //数组引用
print_r($arr); //查看数组
echo '<br>';
class A
{
    public $a = 123;
    public $b = 456;
}
$obj = new A();
echo $obj->a; //对象引用
echo '<br>';
print_r($obj); //查看对象
?>
<?php
//3、::的用法
//双冒号操作符即作用域限定操作符Scope Resolution Operator可以访问静态、const和类中重写的属性与方法。

//（1）Program List：用变量在类定义外部访问
class Fruit_1
{
    const CONST_VALUE = 'Fruit_1 Color';
}
$classname = 'Fruit_1';
echo $classname::CONST_VALUE; // As of PHP 5.3.0
echo Fruit_1::CONST_VALUE;
//（2）Program List：在类定义外部使用::
class Fruit_2
{
    const CONST_VALUE = 'Fruit_2 Color';
}
class Apple_2 extends Fruit_2
{
    public static $color = 'Red';
    public static function doubleColon()
    {
        echo parent::CONST_VALUE . "<br>";
        echo self::$color . "<br>";
    }
}
Apple_2::doubleColon();
//（3）Program List：调用parent方法
class Fruit_3
{
    protected function showColor()
    {
        echo "Fruit_3::showColor()<br>";
    }
}
class Apple_3 extends Fruit_3
{
    // Override parent's definition
    public function showColor()
    {
        // But still call the parent function
        parent::showColor();
        echo "Apple_3::showColor()<br>";
    }
}
$apple = new Apple_3();
$apple->showColor();
//（4）Program List：使用作用域限定符
class Apple_4
{
    public function showColor()
    {
        return $this->color;
    }
}
class Banana
{
    public $color;
    public function __construct()
    {
        $this->color = "Banana is yellow";
    }
    public function GetColor()
    {
        return Apple_4::showColor();
    }
}
$banana = new Banana;
echo $banana->GetColor();
//（5）Program List：调用基类的方法
class Fruit_5
{
    static function color()
    {
        return "color";
    }
    static function showColor()
    {
        echo "show " . self::color();
    }
}
class Apple_5 extends Fruit_5
{
    static function color()
    {
        return "red";
    }
}
Apple_5::showColor();
// output is "show color"!
?>