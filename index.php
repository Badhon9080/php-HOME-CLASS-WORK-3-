<?php
  $wish = "wishing";
    if($wish == "wishing"){
        echo "all are OKK!";
    }
    else{
        echo "all are not ok!";
    }

    $wish = "wishing15";
    if($wish == "wishing"){
        echo "all are OKK!";
    }
    else{
        echo "all are not ok!";
    }

    //ex 1
    $c = 50;
    $i = 40;
    $d = 19;
    if ($c > $i) {
        echo "$c is greate than $i";
    }

   $c = 50;
    $i = 40;
    $d = 19;
    if($c > $i && $c > $d){
        echo "$c is greater than $i and $d";
    }
    else if($i > $c && $i > $d){
        echo "$i is greater than $c and $d";
    }
    else{
        echo "$d is greater than $c and $i";
    }

    $c = 50;
    $i = 80;
    $d = 19;
    if($c > $i && $c > $d){
        echo "$c is greater than $i and $d";
    }
    else if($i > $c && $i > $d){
        echo "$i is greater than $c and $d";
    }
    else{
        echo "$d is greater than $c and $i";
    }

    $c = 50;
    $i = 40;
    $d = 99;
    if($c > $i && $c > $d){
        echo "$c is greater than $i and $d";
    }
    else if($i > $c && $i > $d){
        echo "$i is greater than $c and $d";
    }
    else{
        echo "$d is greater than $c and $i";
    }
    function getGreaterNumbeor(){
        $c = 50;
        $i = 40;
        $d = 19;
        if($c > $i && $c > $d){
            echo "$c is greater than $i and $d";
        }
        else if($i > $c && $i > $d){
            echo "$i is greater than $c and $d";
        }
        else{
            echo "$d is greater than $c and $i";
        }
    }
     getGreaterNumbeor();
    function getGreaterNumber($c1,$i1,$d1){
        $c = $c1;
        $i = $i1;
        $d = $d1;
        if($c > $i && $c > $d){
            echo "$c is greater than $i and $d";
        }
        else if($i > $c && $i > $d){
            echo "$i is greater than $c and $d";
        }
        else{
            echo "$d is greater than $c and $i";
        }
    }
     getGreaterNumber(500,400,190);




     //authincation
     $userName = "testuseR";
     $userPass = "1254990";
     if( $userName == 'testuseR'){
        if($userPass = '1254990'){
            echo "you login is success!";
        }
        else{
            echo "you login is unsuccess!";
        }
        
     }
     else{
        echo "your name is not correct";
     }


    $userName = "testuseR";
     $userPass = "12549900";
     if( $userName == 'testuseR'){
        if($userPass == "1254990"){
            echo "you login is success!";
        }
        else{
            echo "you login is unsuccess!";
        }
        
     }
     else{
        echo "your name is not correct";
     }
    function checKuserru(){
        $userName = "testuseR";
        $userPass = "1254990";
        if( $userName == 'testuseR'){
           if($userPass == "1254990"){
               echo "you login is success!";
           }
           else{
               echo "you login is unsuccess!";
           }
           
        }
        else{
           echo "your name is not correct";
        }
     }checKuserru();
     function checKuser($user, $pass){
        $userName = $user;
        $userPass = $pass;
        if( $userName == 'testuseR'){
           if($userPass == "1254990"){
               echo "<h1>you login is success!</h1>";
           }
           else{
               echo "you login is unsuccess!";
           }
           
        }
        else{
           echo "your name is not correct";
        }
     }checKuser("testuseR", "1254990"); 
     //ex (THREE)
     //even/odd

  $num = 51;
       if($num % 2 == 0){
        echo "$num is = an even number.";
       }
       else{
        echo "$num is = an odd number.";
       } 
      function getResults(){
        $num = 50;
        if($num % 2 == 0){
            echo "$num is = an even number";
        }
        else{
            echo "$num is = not even number";
        }
       }getResults();
       function getResult($n){
        $num = $n;
        if($num % 2 == 0){
            echo "$num is = an even number";
        }
        else{
            echo "$num is = not even number";
        }
       }getResult(500);
       //ternary operators

       $num = 50;
       echo $num % 2 == 0 ? "even" : "odd";

       $num = 51;
       echo $num % 2 == 0 ? "even" : "odd";

       //switch

       $num = 50;
       switch($num){
        case 50;
        echo "the number is an even number";
        
       }

       $num = 45;
       switch($num){
        case 50;
        echo "the number is an even number";
          break;
         case 45;
         echo "the number is an odd number";
           break; 
       } 
     //ARRAY

   //  $num = [20, "test"];
 //  $test = array(25,40);


 $num = [20, "testing", "pabel"];
 var_dump($num);

 $num = [20, "testing", "pabel"];
 echo "<pre>";
 var_dump($num);
 echo "</pre>";
 $num = [20, "testing", "pabel"];
 echo "<pre>";
 print_r($num);
 echo "</pre>";
 $num = [20, "testing", "pabel"];
 echo "<pre>";
 print_r($num[0]);
 echo "</pre>";
 $num = [20, "testing", "pabel"];
 echo "<pre>";
 print_r($num[2]);
 echo "</pre>";

$num = [
 "student" =>  "badhon",
 "age" =>   20,  
 "institute" => "puc",
 ];
 echo "<pre>";
 print_r($num);
 echo "</pre>";

 $num = [
    "student" =>  "badhon",
    "age" =>   20,  
    "institute" => "puc",
    ];
    echo "<pre>";
    print_r($num["student"]. "=" .$num["age"]);
    echo "</pre>";

    $num = [
        "student" =>  "badhon",
        "age" =>   20,  
        "institute" => "puc",
        ];
        echo "<pre>";
        print_r($num["student"]. " " .$num["age"]);
        echo "</pre>";
   $pretest = [
        "name" => "badhon",
        "age"  => 20,
        "institute" => [
            "ssc" => "2014",
             "hsc" => "2016",
             "BBA"  => "puc",
        ],
        "social.media" => [
            "facebook" => "facebook.com",
            "twitter"  => "twitter.com",
        ],
    ];  
       echo "<pre>";
       print_r("my name is ".$pretest["name"]." i am ".$pretest["age"]."years old. i have two social media, they are ".$pretest["social.media"]["facebook"]. " and ".$pretest["social.media"]["twitter"].".");
       echo "</pre>";
?>
