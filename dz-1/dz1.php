<?php

// Задание #1

$name = 'Николай';
$age = '22';

echo 'Меня зовут ' . $name . '<br>';
echo 'Мне '. $age . ' года <br>';
echo ' “!|/’”\ <br><br>';

// Задание №2
const ALL_PICTURES = 80;
const FLOMASTERS_PICTURES = 23;
const PENCILS_PICTURES = 40;
const KRASKAMI = ALL_PICTURES - FLOMASTERS_PICTURES - PENCILS_PICTURES;

echo 'На школной выставке ' . ALL_PICTURES . ' рисунков. ' .FLOMASTERS_PICTURES . ' из них выполнены фломастерами,' . PENCILS_PICTURES . ' карандашами, а остальные - красками. Сколько рисунков , выполненые красками, на школьной выставке.<br>';
echo 'Красками выполнено ' . KRASKAMI . ' рисунков на школьной выставке<br><br>';

// // Задание №3

// echo 'Задание №3<br>';

$age = 22;

if($age >= 18 && $age <=65){
    echo 'Вам еще работать и работать';
}else if($age >65) {
    echo 'Вам пора на пенсию';
}else if ($age >= 1 && $age <= 17){
    echo 'Вам еще рано работать';
}else{
    echo 'Неизвестный возраст';
}

echo '<br><br>';

// // Задание №4

echo 'Задание №4<br>';

$day = 10;

switch($day){
    case $day >= 1 && $day <=5 :
        echo 'Это рабочий день';
        break;
    case $day == 6 || $day == 7 :
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}

// // Задание №5
$bmw = [
    'model' => 'x5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
];

$toyota = [
    'model' => 'carola',
    'speed' => '120',
    'doors' => '5',
    'year' => '2016'
];

$opel = [
    'model' => 'astra',
    'speed' => '120',
    'doors' => '5',
    'year' => '2014'
];


$carsArray = [
    'bmw' => $bmw , 
    'toyota' => $toyota , 
    'opel' => $opel 
];

foreach($carsArray as $key => $car){
    echo 'Car name is ' .$key . '<br>';
    echo 'Car model is ' . $car['model'] . '<br>';
    echo 'Car doors are ' . $car['doors'] . '<br>';
    echo 'Car year is ' . $car['year'] . '<br>';

    echo '<br><br>';
}

// Задание #6

echo '<table>';
    for($row = 1 ; $row <= 10; $row++){
        echo '<tr>';
    
        for($col = 1; $col <=10; $col++){
            if($row % 2 == 0  && $col % 2 == 0){
                echo '<td> ('  . $row * $col .  ') </td>';
            }else if($row % 2 != 0  && $col % 2 != 0){
                echo '<td> [' . $row * $col . '] </td>';
            }else {
                echo '<td>' . $row * $col . '</td>';
            }
            
        }
        echo '</tr>';
    }
echo '</table>';