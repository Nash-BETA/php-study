<?php
class Person{
    public $firstname;
    public $lastname;
    public static $en = 1.1 ;

    public function __construct(string $firstname = null, string $lastname = null){
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
    }


    public function show($job){
        print "<p>僕の名前は{$this->firstname}で、職業は{$job}</p>";
    }

    public function test($job){
        print "職業は{$job}</p>";
    }
    //:intでメソッド（メンバ関数を定義してる）
    public static function  buy(int $sum){
        return $sum * self::$en;
    }

    
}


?>