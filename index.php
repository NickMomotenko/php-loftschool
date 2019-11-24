<?php

// Преведение к виду PSR -2 

CONST TestContstanta = 'asd';
$user_name = "Igor";
function show_something()
{ 
    RETURN 'SOMETHING';
}
if (1==1) echo 'hi';



// Задание #1

// $name = 'Николай';
// $age = '22';

// echo 'Меня зовут ' . $name . '<br>';
// echo 'Мне '. $age . ' года <br>';
// echo ' “!|/’”\ <br><br>';

// Задание №2
// const ALL_PICTURES = 80;
// const FLOMASTERS_PICTURES = 23;
// const PENCILS_PICTURES = 40;
// const KRASKAMI = ALL_PICTURES - FLOMASTERS_PICTURES - PENCILS_PICTURES;

// echo 'На школной выставке ' . ALL_PICTURES . ' рисунков. ' .FLOMASTERS_PICTURES . ' из них выполнены фломастерами,' . PENCILS_PICTURES . ' карандашами, а остальные - красками. Сколько рисунков , выполненые красками, на школьной выставке.<br>';
// echo 'Красками выполнено ' . KRASKAMI . ' рисунков на школьной выставке<br><br>';

// // Задание №3

// echo 'Задание №3<br>';

// $age = 22;

// if($age >= 18 && $age <=65){
//     echo 'Вам еще работать и работать';
// }else if($age >65) {
//     echo 'Вам пора на пенсию';
// }else if ($age >= 1 && $age <= 17){
//     echo 'Вам еще рано работать';
// }else{
//     echo 'Неизвестный возраст';
// }

// echo '<br><br>';

// // Задание №4

// echo 'Задание №4<br>';

// $day = 10;

// switch($day){
//     case $day >= 1 && $day <=5 :
//         echo 'Это рабочий день';
//         break;
//     case $day == 6 || $day == 7 :
//         echo 'Это выходной день';
//         break;
//     default:
//         echo 'Неизвестный день';
//         break;
// }

// // Задание №5
// $bmw = [
//     'model' => 'x5',
//     'speed' => '120',
//     'doors' => '5',
//     'year' => '2015'
// ];

// $toyota = [
//     'model' => 'carola',
//     'speed' => '120',
//     'doors' => '5',
//     'year' => '2016'
// ];

// $opel = [
//     'model' => 'astra',
//     'speed' => '120',
//     'doors' => '5',
//     'year' => '2014'
// ];


// $carsArray = [
//     'bmw' => $bmw , 
//     'toyota' => $toyota , 
//     'opel' => $opel 
// ];

// foreach($carsArray as $key => $car){
//     echo 'Car name is ' .$key . '<br>';
//     echo 'Car model is ' . $car['model'] . '<br>';
//     echo 'Car doors are ' . $car['doors'] . '<br>';
//     echo 'Car year is ' . $car['year'] . '<br>';

//     echo '<br><br>';
// }

// Функции

// function task1( $arrayStr , $print = false){

//     if($print){
//         return $arrayStr;
//     }else{
//         foreach($arrayStr as $str){
//             echo '<p>' . $str . '</p>';
//         } 
//     }
   
// }
// task1(['аа', 'бб','вв']);
// task1(['аа', 'бб','вв'] , true);


// function task2($str, ...$numbers ){

//     $results;

//     foreach($numbers as $num){
//         if($str == '+'){
//             $results += $num;
//         }else if ($str == '-'){
//             $results -= $num;
//         }else if ($str == '*'){
//             $results *= $num; 
//         }else if($str == '/'){
//             $results /= $num; 
//         }else{
//             echo 'Варианты закончились';
//         }
//     }

//     return $results;
// }
// echo task2('*' ,1,2,3);

// Задание #3
// function task3($row , $col){
//     echo '<table>';
//     for($r=1 ; $r <= $row; $r++){
//         echo '<tr>';
    
//         for($c=1; $c<=$col; $c++){
//             echo '<td>' . $r * $c .'</td>';
//         }
    
//         echo '</tr>';
//     }
//     echo '</table>';
// }
// echo task3(10, 10);

// Задание #4
// $date = '24.02.2016 00:00:00';
// echo strtotime($date);
// echo date('d.m.Y H:i');

// Задание #5
// function task52($string, $current ,$second){
//     echo str_replace( $current, $second , $string);
// }
// echo task52('Карл у Клары украл Кораллы','К','');
// echo '<br>';
// echo task52('Две бутылки лимонада','Две','Три');


// Задание №6
// $testText = 'Hello again';
// file_put_contents('test.txt' , $testText);

// function task6($filename){
//     echo file_get_contents($filename);
// }
// echo task6('test.txt');

// тест коммит