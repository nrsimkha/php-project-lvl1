<?php
namespace BrainGames\GameFunc;

use function \cli\line;
use function BrainGames\Cli\run;

//ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ_____________________

//генерация ответа игроку
/*function StdOut($userAnswer, $rightAnswer, $first_name, $n){
    if (AssumeEqual($userAnswer, $rightAnswer)) {
        echo '77';
        if ($n == 2) {
            line("Congratulations, {$first_name}!");
            return false;
        }else{
            echo '55';
            line("Correct!");
            return true;
        }
    } else {
        line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
        line("Let's try again, {$first_name}!");
        return false;
    }
}*/

//генерируем рандомное число от 1 до 100
function RandomInt()
{
    $integer = round(mt_rand(0, 100));
    return $integer;
}
// задаем игроку вопрос и получаем его ответ в переменную $str
function question($question)
{
    line("Question: {$question}");
    $str = \cli\prompt("Your answer");
    return $str;
}
// проверка является ли число четным
function IsEven($integer)
{
    if ($integer % 2 === 0) {
        return "yes";
    } else {
        return "no";
    }
}
//проверка совпадает ли ответ игрока с правильным ответом
function AssumeEqual($userAnswer, $rightAnswer)
{
    if ($userAnswer == $rightAnswer) {
        return true;
    } else {
        return false ;
    }
}

// считаем сумму, произведение или разность чисел
function Calculate($number_1, $number_2, $sign)
{
    switch ($sign) {
        case '+':
            return $number_1 + $number_2;
            break;
        case '-':
            return $number_1 - $number_2;
            break;
        case '*':
            return $number_1 * $number_2;
            break;
    }
}
