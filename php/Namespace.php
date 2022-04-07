<?php
namespace MyProject;
?>
<html>
<head>
    <title> Namespace </title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
</head>
<style>
    p,ul,ol,li {
        margin: 0px;
    }
</style>
<body>
<p>1.魔术常量</p>
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
    echo '命名空间为："', __NAMESPACE__, '"';
    ?>
</ul>
<p>2.命名空间</p>
<ul>
    <?php
    echo '命名空间为："', __NAMESPACE__, '"';
    ?>
</ul>
</body>
</html>