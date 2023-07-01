<?php
echo '</br>1 It is finally block, which always executes.';  
echo '</br> 2It is finally block, which always executes.';  
try{
    $a=5;
    $b=0;
    if($b==0){
        throw new Exception("Value must be >0 ");  
    }else{
        $x=$a/$b;
    }
}catch (Exception $ex){
    echo $ex;
}finally{
    echo '</br> It is finally block, which always executes.';  
}
echo '</br> 3It is finally block, which always executes.';  
echo '</br>4 It is finally block, which always executes.<br><br>';  


function test() {
    // try {
    //     throw new Exception('foo');
    // } catch (Exception $e) {
    //     return 'catch';
    // } finally {
    //     return 'finally';
    // }

    echo "hi";
}



function test2() {
    0 or throw new Exception('It did not work');
}

try {
    test2();
} catch (Exception $e) {
    print $e->getMessage();
}