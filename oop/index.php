<?php
    function p(){
        echo "<br>";
    }
    // class calc{
    //     PUBLIC $a,$b,$c;
    //     function __construct(){
    //         echo "Object Created";
    //     }
    //     function add(){
    //         return $this->a + $this->b;
    //     }
    //     function sub(){
    //         return $this->a - $this->b;
    //     }
    // }


    // class calc2 extends calc{
    //     function __construct(){
    //         echo "Object 2 Created";
    //     }
    // }
    // $x = new calc2();
    // $x->a=4;
    // $x->b=9;
    // echo $x->add() ."\n";

    // abstract class demo{
    //     function fun(){
    //         echo "Hello";
    //     }
    //     abstract protected function funabs($a,$b);
    // }

    // class demochild extends demo{
    //     public function funabs($c,$d){
    //         echo "Hello";
    //     }
    // }
    // //$x = new demo(); //can't be instantiated

    // $x = new demochild();

    // $x->funabs(2,3);







    class a{
        function fun(){
            echo "a";
        }
    }
    class b{
        function bbb(){
            echo "b";
        }
    }
    //   error php cannot do this kinda inheritence




    //     Interface Class
    // Abstract Class
    // Interface class supports multiple inheritance feature
    // Abstract class does not support multiple inheritances

    // This does not contain a data member.
    // Abstract class does contain a data member.

    // The interface does not allow containers.
    // The abstract class supports containers.

    // An interface class only contains incomplete members which refer to the signature of the member.
    // Abstract class contains both incomplete(i.e. abstract) and complete members.

    // Since everything is assumed to be public, an interface class does not have access modifiers by default.
    // An abstract class can contain access modifiers within subs, functions, and properties.

    // Any member of an interface cannot be static.
    // Only a complete member of the abstract class can be static.


    interface i1{ //no access specifiers here for the interface class 
        public function a(); 
    }
    interface i2{
        function b();
    }

    // trait t1{
    //     function fun(){
    //         echo "Hello t1";
    //     }
    // }
    // trait t2{
    //     function fun(){
    //         echo "Hello t1";
    //     }
    // } Fatal error: Trait method t2::fun has not been applied as c::fun, because of collision with t1::fun  if not used insteadof


    trait t1{
        public $name = "trait";
        function fun(){
            echo "Hello t1";
        }
    }
    trait t2{
        function fun(){
            echo "Hello t2";
        }
    }
    trait t3{
        private function demofunc(){
            echo "Hello t3 inside private func";
        }
    }
    trait t4{
        private function demofunc4(){
            echo "Hello t4 inside private func";
        }
    }
    class c implements i1,i2{
        public $name=1;
        function a(){
            echo "a";
        }
        function b(){
            echo "b";
        }
        use t1,t2,t3,t4{
            t1::fun insteadOf t2;
            t2::fun as newfun;
            t3::demofunc as public;
            t4::demofunc4 as public demo;
        }
    }

    $a = new c();
    echo $a->name;
    $a -> fun();
    p();
    $a -> newfun();
    p();
    $a -> demofunc();
    p();
    $a -> demo();
    p();

    trait test{
        function fun(){
            echo "Hello in trait";
        }
    }

    class a1{
        function fun(){
            echo "Hello in a1";
        }
    }
    class b1 extends a1{
        use test;
        function fun(){
            echo "Hello in b1";
        }
    }

    $obj = new b1();
    p();
    $obj -> fun();
    p();

    //************Type hinting*************/
    function fun(a $x){
        $x -> fun();
    }

    fun(new a());
    $c = new a();
    p();
    fun($c);

    class school{
        public function printnames(student $names){
            foreach($names->getnames() as $ind){
                echo $ind;
                p();
            }
        }
    }
    class student{
        public function getnames(){
            return ['aaloo','sev','puri'];
        }
    }

    $sc = new school();
    $st = new student();
    $sc -> printnames($st);

    // require 'prod.php';
    // require 'product.php';

    // use prod as ppp;

    // $p =new pro\product();
    // $p -> fun();

    // $p2 = new ppp\product();
    // $p2 -> fun();

    /*********METHOD CHAINIG********* */

    class chain{
        function a(){
            echo "a";
            return $this;
        }
        function b(){
            echo "b";
            return $this;

        } 
        function c(){
            echo "c<br>";
        }
    }

    $c = new chain();
    $c -> a() -> b() -> c();

    p();
    p();
    class aa{
        function __construct(){
            echo "Inside construct <br>";
        }
        function fun(){
            echo "hello<br>";
        }
        function __destruct(){
            echo "Inside destruct<br>";
        }
    }

    $object = new aa();
    $object ->fun();
    $object ->fun();
    $object ->fun();
    $object ->fun();

    function __spl_autoload_register($class){
        require $class .".php";
    }

    $aa1 = new product();