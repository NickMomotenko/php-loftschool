<?php

// Функции

function task1( $arrayStr , $print = false){

    if($print){
        return $arrayStr;
    }else{
        foreach($arrayStr as $str){
            echo '<p>' . $str . '</p>';
        } 
    }
   
}

function task2($str, ...$numbers ){

    $results;

    foreach($numbers as $num){
        if($str == '+'){
            $results += $num;
        }else if ($str == '-'){
            $results -= $num;
        }else if ($str == '*'){
            $results *= $num; 
        }else if($str == '/'){
            $results /= $num; 
        }else{
            echo 'Варианты закончились';
        }
    }

    return $results;
}


// Задание #3
function task3($row , $col){
    echo '<table>';
    for($r=1 ; $r <= $row; $r++){
        echo '<tr>';
    
        for($c=1; $c<=$col; $c++){
            echo '<td>' . $r * $c .'</td>';
        }
    
        echo '</tr>';
    }
    echo '</table>';
}


// Задание #4

$date = '24.02.2016 00:00:00';
echo strtotime($date);
echo date('d.m.Y H:i');

// Задание #5
function task52($string, $current ,$second){
    echo str_replace( $current, $second , $string);
}



// Задание №6
$testText = 'Hello again';
file_put_contents('test.txt' , $testText);

function task6($filename){
    echo file_get_contents($filename);
}


