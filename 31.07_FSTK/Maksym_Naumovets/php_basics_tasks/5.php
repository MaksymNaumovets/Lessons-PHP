<?php
/*1. Создайте переменную name и присвойте ей значение, содержащее ваше имя, например "Иннокентий".*/
$name = 'Maksym';
/*2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.*/
$age = 25;
/*3. Выведите с помощью echo фразу "Меня зовут: %ваше_имя%", например: "Меня зовут: Иннокентий".*/
$str1 = "1. Меня зовут {$name}.";
echo $str1,"<br/>";
/*4. Выведите фразу "Мне %ваш_возраст% лет", например: "Мне 20 лет".*/
$str2 = "2. Мне {$age} лет.";
echo $str2, "<br/>";
/*5. "Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).*/
if ($age >= 18 and $age < 60)
{
    echo "3. Мне ещё работать и работать.","<br/>";
}