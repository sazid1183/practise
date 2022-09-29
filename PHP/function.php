<?php

function test1(){
    echo "I am a new php learner";
}
function test2(){
    echo "lorem100";
}
function function_dilam(){
    test1();
    echo "<br>";
    test2();
}

function_dilam();

echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3>Function Paramitre</h3>";
echo "<hr>";
// Funtion Paremitar Start

function mess($jani_ki){
    echo $jani_ki;
}
mess("brother");

echo "<br><br><br><br><br>";
echo "<br>";
function clac($num1, $num2){
    echo $num1/$num2. "<br> ------it's your Result<br>";
    

}

clac(54, 541);
clac(54, 45);


echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3>Return Function Paramitre</h3>";
echo "<hr>";
// Funtion Paremitar Start
function Rclac($num1, $num2){
    return $num1 + $num2. "<br> ------it's your Result<br>";
    // return only return it not echo....
    

}

$result1 = Rclac(54, 541);
echo $result1;
$result1 = Rclac(54, $result1);
echo $result1;





echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3>Global Function Paramitre</h3>";
echo "<hr>";
// G;obal Paremitar Start
function global($num1, $num2){
    return $num1 + $num2. "<br> ------it's your Result<br>";
    // return only return it not echo....
    

}

$result1 = Rclac(54, 541);
echo $result1;
$result1 = Rclac(54, $result1);
echo $result1;


?>