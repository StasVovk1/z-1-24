<?php 
$N = 15236;
echo 'Исходные данные N: '.$N.';';
echo '<br> двоичной  системе  счисления: '.binary($N);
echo '<br >шестнадцатеричной системе счисления: '.hexadecimal($N);

function binary ($number){
    if ($number <= 0){
        return 0;
    }
    $answer = '';
    while ($number > 0){
        if ($number % 2 != 0){
            $answer = '1'.$answer;
            $number = ($number - 1) / 2;
        }else {
            $answer = '0'.$answer;
            $number = $number / 2;
        }         
    } 
    return $answer;
}

function hexadecimal ($number){  
    if ($number <= 0){
        return 0;
    }  
    $answer = '';
    $mass_number = [0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F'];
    while ($number > 0){
        if ($number % 16 != 0){
            $ost = $number % 16;
            $answer = $mass_number[$ost].''.$answer;
            $number = ($number - $ost) / 16;
        }else {
            $answer = '0'.$answer;
            $number = $number / 16;
        }         
    } 
    return $answer;
}
?>