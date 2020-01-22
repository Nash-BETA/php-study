<?php
require_once('class.php');

$a = new topPerson('彩','test');

$a->show('ニート');

var_dump(Person::buy(100)) . '\n';

$a->work() ;

$content = 'var opt = {data : ';
    echo mb_strlen($content);
?>