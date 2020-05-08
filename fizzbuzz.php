<?php 
for($n=1;$n<=100;$n++){
    if($n % 3 === 0){
        echo 'Fizz'.'　';
    }
    else if($n%5=== 0){
        echo 'Buzz'.' ';
    }
    else if($n % 3 == 0 && $n%5== 0){
        echo 'FizzBuzz'.' ';
    }
    else{
        echo $n.' ';
    }
   
    if($n%10===0){
      echo "\n";
    }
   
}

?>