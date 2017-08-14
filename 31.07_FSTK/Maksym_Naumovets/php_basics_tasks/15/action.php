<?php
/*15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных.
Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.*/
include '15.html';
$operator = $_POST ['operator'];
$a = $_POST ['a'];
$b = $_POST ['b'];
//echo $a;
//echo $operator;
//echo $b;
//var_dump($operator);
if ($b==0 and $operator=='/'){
    echo "на 0 делить нельзя";
}else {
    if ($operator == '+') {$result=$a + $b;}
    if ($operator == '-') {$result=$a - $b;}
    if ($operator =='/')  {$result=$a / $b;}
    if ($operator == '*') {$result=$a * $b;}
    if ($operator == '%') {$result=$a % $b;}
    echo $a . $operator .$b .'='  .$result;
}
?>

