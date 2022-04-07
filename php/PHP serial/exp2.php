<?php

class Read{//f1a9.php
    public $file='f1a9.php';
}
# 参数可控
$a=new Read();
$obj = serialize($a);
echo $obj."<br>";
echo urlencode($obj);
show_source(__FILE__);
?>