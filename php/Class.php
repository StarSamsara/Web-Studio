<title> Class </title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<a href="./Class_Tip1.php" target="_blank">tip1</a><br>
<?php show_source(__FILE__); ?>

<?php
class Site
{
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par)
    {
        $this->url = $par;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}
?>
<?php

class MyDestructableClass
{
    function __construct()
    {
        print "构造函数\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        print "销毁 " . $this->name . "\n";
    }
}
$obj = new MyDestructableClass();
?>
<?php
// 子类扩展站点类别
class Child_Site extends Site
{
    var $category;

    function setCate($par)
    {
        $this->category = $par;
    }

    function getCate()
    {
        echo $this->category . PHP_EOL;
    }
    function getUrl()
    {
        echo $this->url . PHP_EOL;
        return $this->url;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
        return $this->title;
    }
}
?>
<?php
//
//public（公有）：公有的类成员可以在任何地方被访问。
//protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
//private（私有）：私有的类成员则只能被其定义所在的类访问。
//
//类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。
// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}
// 实现接口
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach ($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}
?>

<?php
class MyClass
{
    const constant = '常量值';
    var $haha = 'hahaha00';

    function showConstant()
    {
        echo  self::constant . PHP_EOL;
    }
}
//自 PHP 5.3.0 起，可以用一个变量来动态调用类。但该变量的值不能为关键字（如 self，parent 或 static）。
echo MyClass::constant . PHP_EOL;

$classname = "MyClass";
echo $classname::constant . PHP_EOL; // 自 5.3.0 起

$class = new MyClass();
$class->showConstant();

echo $class::constant . PHP_EOL; // 自 PHP 5.3.0 起
?>