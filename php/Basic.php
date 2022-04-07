<html>
<head>
    <title> Baisc </title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
</head>
<style>
    p,ul,ol,li {
        margin: 0px;
    }
</style>
<body>
<pre>
<?php

    // 这是 PHP 单行注释
    echo "Hello"." "."World!";
    echo PHP_EOL; // 文本换行符
    echo "Hello"," ","World!";
    echo PHP_EOL;
    function myTest()
    {
        static $x=0; //不存在则为0，存在则为已有值
        echo $x;
        $x++;
        echo PHP_EOL;    // 换行符
        //每次调用该函数时，该变量将会保留着函数前一次被调用时的值。
    }
    myTest();//0
    myTest();//1
    myTest();//2
    $flag='flag{7809p98bb0vev;354wh2vf5vq\63}';
    echo $a,PHP_EOL;    //
    echo $a+$b,PHP_EOL;//0
    echo $a-$b,PHP_EOL;//0
    echo $a*$b,PHP_EOL;//0
    unset($a);
    unset($b);
    unset($x);
    ?>
</pre>
-----------------------------------------
    <p>0.PHP变量</p>
    <ul>
<pre>
<?php
$int1=9;$int2=-9;$int3=011;$int4=0x9;
$flt1=0.123;$flt2=1.23e2;$flt3=12300E-2;
$bol1=true;$bol2=false;
$cars=array("Volvo","BMW","Toyota");
$nul=null;
class Car
{
    var $color;
    var $kind;
    function __construct($color="green",$kind="Volve") {
        $this->color = $color;
        $this->kind = $kind;
    }
    function what_color() {
        return $this->color;
    }
}
function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "$prop = $val\n";
    }
}
// 实例一个对象
$herbie = new Car("white");
// 显示 herbie 属性
echo "herbie: Properties\n";
print_vars($herbie);
echo "<br>";
echo print_r($GLOBALS);//返回变量的数据类型和值
?>
</pre>
</ul>
--------------------------------------------------
<p>1.PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。index 保存变量的名称。</p>
-------------------------------------------------
<p>2.echo 和 print 区别:</p>
<ul>
    <li>echo - 可以输出一个或多个字符串  echo 或 echo()</li>
    <li>print - 只允许输出一个字符串，返回值总为 1  print 或 print()</li>
    <li>提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。</li>
</ul>
---------------------------------------------------
<?php
echo <<<EOF
    <p>3.PHP EOF(heredoc) 使用说明</p>
    <ol>
        <li>结束标记必须后接分号，否则编译通不过。</li>
        <li>EOF 可以用任意其它字符代替，只需保证结束标识与开始标识一致。</li>
        <li>结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)</li>
        <li>开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号。</li>
        <li>当内容需要内嵌引号（单引号或双引号）时，不需要加转义符，本身对单双引号转义，此处相当与q和qq的用法。</li>
    </ol>
EOF;
?>
-----------------------------------------------------
<p>4.类型比较</p>
<ul>
    <li>松散比较：使用两个等号 == 比较，只比较值，不比较类型</li>
    <li>严格比较：用三个等号 === 比较，除了比较值，也比较类型</li>
    <?php
    echo '21 == 21: ';
    var_dump(21 == 21);
    echo "<br>";
    echo '21 === "21": ';
    var_dump(21 === "21");
    echo "<br>";
    echo '0 == false: ';
    var_dump(0 == false);
    echo "<br>";
    echo '0 === false: ';
    var_dump(0 === false);
    echo "<br>";
    echo '0 == null: ';
    var_dump(0 == null);
    echo "<br>";
    echo '0 === null: ';
    var_dump(0 === null);
    echo "<br>";
    echo 'false == null: ';
    var_dump(false == null);
    echo "<br>";
    echo 'false === null: ';
    var_dump(false === null);
    echo "<br>";
    echo '"0" == false: ';
    var_dump("0" == false);
    echo "<br>";
    echo '"0" === false: ';
    var_dump("0" === false);
    echo "<br>";
    echo '"0" == null: ';
    var_dump("0" == null);
    echo "<br>";
    echo '"0" === null: ';
    var_dump("0" === null);
    echo "<br>";
    echo '"" == false: ';
    var_dump("" == false);
    echo "<br>";
    echo '"" === false: ';
    var_dump("" === false);
    echo "<br>";
    echo '"" == null: ';
    var_dump("" == null);
    echo "<br>";
    echo '"" === null: ';
    var_dump("" === null);
    //
    echo "<br>";
    echo "<strong>";
    echo '"12aasadwadw" == 12: ';
    var_dump("1a" == 1);
    echo "</strong>"
    ?>
</ul>
-------------------------------------------------------
<p>5.常量</p>
<ul>
<?php
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
echo greeting;   // 输出 "greeting"
echo '<br>';
?>
<?php
// 不区分大小写的常量名,常量是全局的
define("GREETING", "欢迎访问 Runoob.com", true);
function GRT()
{
    echo greeting;  // 输出 "欢迎访问 Runoob.com"
}
GRT();
?>
</ul>
-----------------------------------------------------------
<p>6.字符串</p>
<ul>
    <?php
    $txt1="Hello world!";
    $txt2="What a nice day!";
    echo $txt1;
    echo $txt1 .=$txt2;
    ?>
    <br>
    <a href="https://www.runoob.com/php/php-ref-string.html">php5 String教程</a>
    <br>
    <?php
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    $z = $x + $y; // $x 和 $y 数组合并
    var_dump($z);
    echo"<br>";
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);
    var_dump($x <> $y);
    var_dump($x !== $y);
    ?>
    <br>
    <?php
    $test = '菜鸟教程';
    // 普通写法
    $username = isset($test) ? $test : 'nobody';
    echo $username, PHP_EOL;
    // PHP 5.3+ 版本写法
    $username = $test ?: 'nobody';
    echo $username, PHP_EOL;
    ?>
</ul>
<p>7.数组</p>
<ul>
    <li>遍历数值数组<br>
    <?php
    $cars=array("Volvo","BMW","Toyota");
    for($x=0;$x<count($cars);$x++)
    {
        echo $cars[$x];
        echo "<br>";
    }
    echo "<pre>";
    foreach ($cars as $c_value)
    {
        echo $c_value . PHP_EOL;
    }
    echo "</pre>";
    ?>
    </li>
    <li>遍历关联数组<br>
    <?php
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    foreach($age as $x=>$x_value)
    {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?></li>
    <li>sort() - 对数组进行升序排列</li>
    <li>rsort() - 对数组进行降序排列</li>
    <li>asort() - 根据关联数组的值，对数组进行升序排列</li>
    <li>ksort() - 根据关联数组的键，对数组进行升序排列</li>
    <li>arsort() - 根据关联数组的值，对数组进行降序排列</li>
    <li>krsort() - 根据关联数组的键，对数组进行降序排列</li>
    <li><a href="https://www.runoob.com/php/php-ref-array.html">php5 Array教程</a></li>
</ul>
<p>8.魔术常量</p>
<ul>
    <?php
    echo '这是第 " '  . __LINE__ . ' " 行'."<br>";
    echo '该文件位于 " '  . __FILE__ . ' " '."<br>";
    echo '该文件位于 " '  . __DIR__ . ' " '."<br>";
    class test {
        function _print() {
            echo '类名为：'  . __CLASS__ . "<br>";
            echo  '函数名为：' . __FUNCTION__ ."<br>";
        }
    }
    $t = new test();
    $t->_print();
    ?>
</ul>
</body>
</html>