<?php
    // Associative Array

    // $studen_count = array("BBA"=>60,"BCA"=>80);
    // echo($studen_count["BBA"]);

    // echo "<br>";

    // Indexed array
    // $number = array(1,2,3,4,5);
    // echo($number[0]);


    // print the value of array using foreach
    // foreach($number as $num){
    //     echo $num. "<br>";
    // }




    // Multi dimensional Array
    // $cars = array (
    //     array("volvo",25),
    //     array("zen",30),
    //     array("alto",28)
    // );

    // foreach ($cars as $car){
    //     foreach($car as $num){
    //         echo $num. " ";
    //     }
    //     echo "<br>";
    // }





    // range()
    // $numbers = range(0,5);
    // print_r($numbers);

    // echo "<br>";

    // $letters = range('a','z');
    // print_r($letters);


    // count
    // $numbers = array(1,2,3,4,5,6,7,8,9,10);
    // echo count($numbers)



    // array_pad() its in the doubt

    $score = array(5,10);
    $new_score = array_pad($score,5,0);
    echo $new_score[0];
?>