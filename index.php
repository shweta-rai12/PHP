<?php
//simple array index array

// $conn = new mysqli("localhost", "root", "12345", "contact");
// $arr = array("apple", "mango");
// echo $arr[1];

//Associative Array
// $student_count = array("BBA"=>60, "BCA"=>80);
// echo $student_count["BBA"];

//  foreach

// $colors =["Red","Blue","Green"];
// foreach($colors as $color){
//     echo $color."<br>";
// }

// Multidimensional Array

// $cars = array
// (
//     array("volvo",25),
//     array("zen",30),
//     array("alto",28),
// );
// foreach($cars as $car){
//     foreach($car as $num){
//         echo $num. "<br>";
//     }
// }num

//range

// $numbers = range(0,5);
// print_r($numbers);
// // %letters = range('a', 'z');
// $alpha = range('a', 'z');
// print_r($alpha);

//count
// $users = array("Jhon","Peter","Joy");
// $result=count($users);
// echo "<br>";
// echo $result;

//array_pad()
$score = array(5,10);
$new_score = array_pad($score,5,0);
echo $new_score[0];
?>
