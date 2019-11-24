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
task1(['аа', 'бб','вв']);
task1(['аа', 'бб','вв'] , true);


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
echo task2('*' ,1,2,3);

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
echo task3(10, 10);

// Задание #4

$date = '24.02.2016 00:00:00';
echo strtotime($date);
echo date('d.m.Y H:i');

// Задание #5
function task52($string, $current ,$second){
    echo str_replace( $current, $second , $string);
}
echo task52('Карл у Клары украл Кораллы','К','');
echo '<br>';
echo task52('Две бутылки лимонада','Две','Три');


// Задание №6
$testText = 'Hello again';
file_put_contents('test.txt' , $testText);

function task6($filename){
    echo file_get_contents($filename);
}
echo task6('test.txt');

