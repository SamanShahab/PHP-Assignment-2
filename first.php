<?php
// comments
// echo "saman khan"

//datatypes in php
//$string = "hello to my world";
//$int = 18;
//$float = 52.2;
//$bool = true; //false
//$arr = array("apple", "mango", "cherry");

//string functions
//echo "hello world";
//echo strlen("hello world"). "<br>";
//echo str_word_count("hello to my world");
//echo strrev("hello world");
//echo strpos("hello to my world", "world");
//echo str_replace("world", "dunya","hello to my world")


//php constant
// define("name","saman");
// echo name;


//if else
// $num = -18;
// if ($num > 0){
//    echo "positive";
// }else{
//      echo "negative";
// }

// $isLogin = true;
// if ($isLogin){
//     echo "welcome back";
// }else{
//     echo "please log in";
// }


// $score = 55;
// if ($score >= 80){
//    echo "Grade A";
// }else if($score >=70){
//    echo "Grade B";
// }else if($score >=60){
//    echo "Grade C";
// }else{
//    echo "Fail";
// }


//CHECKING STRING LENGTH
// $msg = "";
// if (strlen($msg)>0){
//   echo "message is not empty";
// }else{
//    echo "message is empty";
// }


//checking array elements
// $fruits = array("apple", "mango", "cherry");


// if (in_array("mango", $fruits)){
//    echo "fruit is available";
// }else{
//    echo "fruit is not available";
// }


//using logical operator
// $age = 15;
// $hasId = true;
// if ($age >= 18 && $hasId){
//    echo "you are allowed to enter";
// }else{
//    echo "you are not allowed to enter";
// }


//switch statement
// $favColor = "pink";

// switch ($favColor) {
//    case "red":
//        echo "your fav color is " . $favColor;
//        break;
//    case "yellow":
//       echo "your fav color is " . $favColor;
//        break;
//    default:
//       echo "your fav color is not available but it is ". $favColor;
// }


// for loop
// for ($i=0; $i <= 10; $i=$i+2) {
//    echo "$i".") saman khan"."<br>";
//   echo ($i+1);
// }


// while loop
// $i = 1;
// while ($i <= 5){
//    echo "$i".") saman khan"."<br>";
//    $i++;
// }

//for each loop 
// $fruits = array("apple", "mango", "cherry");
// foreach ($fruits as $fruit){
//    echo "$fruit <br>";
// }


// indexed arrays 
// $fruite = array("apple", "mango", "cherry");
// echo "I like $fruite[0], $fruite[1], $fruite[2]";


// associative array 
// $age = array("saman" => 20,
//             "ali" => 22,
//             "bisma" => 25
// );
// echo "ali is ". $age["ali"]. "years old";


// 2d array
// $cars = array (
//    array("Toyota", 22, 10),
//    array("Suzuki", 22, 10),
//    array("Honda", 22, 10),
// );
// echo $cars[0][0]. ": in stock: ". $cars[0][1]. ", solid: ". $cars[0][2]. "<br>";
// echo $cars[1][0]. ": in stock: ". $cars[0][1]. ", solid: ". $cars[1][2]. "<br>";
// echo $cars[2][0]. ": in stock: ". $cars[0][1]. ", solid: ". $cars[2][2]. "<br>";


//basic function
// function say(){
//    echo "hello";
// }
// say ();
// say();


//parameterized function
// function add($num1, $num2){
//    return $num1 + $num2;
// }

// echo add(10,4)
// $a = add(14, 8);
// echo "the sum is $a";



// default function
// function weight($w=40){
//    echo "the wight is $w";
// }
// weight(85);

?>