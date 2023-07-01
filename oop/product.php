<?php
    namespace pro;
    class product{
        private $name,$xx;
        function __construct(){
            echo "Inside prrroduct<br>";
        }
        function fun(){
            echo "pro/product<br>";
        }
        // function __get($name){
        //     echo " You are trying to access $name pivate or non existing property";
        // }
        function __set($name,$val){
            echo " You are trying to access $name $val pivate or non existing property";
            echo property_exists($this,$name); //returns 1 if property exists even if its private otherwise returns nothing
        }

        function __call($method,$args){
            echo "undefined function $method in this class";
            print_r($args);
        }

        // private static __CallStatic($method,$args){ //TO CHECK PRIVATE STATIC METHOD
        //     echo "This is private static method";
        // }
    }

    $a = new product();
    $a -> x = 5;
    echo property_exists($a,'xx'); //returns 1 if property exists even if its private
    echo "<br>";
    $a -> funx('dhruval',1);
    $a->fun();
