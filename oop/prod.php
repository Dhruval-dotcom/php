<?php
    namespace prod;
    class product{
        function __construct(){
            echo "Inside product";
        }

        function fun(){
            echo "prod/product<br>";
        }
        public $a ,$b;
        function setparam($a,$b){
            $this->a=$a;
            $this->b=$b;
        }
        function __isset($name){ //same with unset
            echo isset($this->$name);
        }

        function __toString(){
            return "<br>can't print object as a string of class ".get_Class($this);
        }
    }

    function fun(){
        echo "Hello";
    }
    $aaa = new product();
    $aaa->{a}=5;
    echo isset($aaa->a); //returns 1 or nothing
    echo $aaa;  
    