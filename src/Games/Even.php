<?php
namespace BrainGames\Even;

use function \cli\line;
use function BrainGames\Cli\run;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________
function EvenGame()
{
    $n = 0;
    $FIRST_NAME = run();
    while ($n < 3) {
        $number = RandomInt();
        $userAnswer = question($number);
        $OppAnsw = OppositeAnswer($userAnswer);
        if (AssumeEqual($userAnswer, $number)) {
            if ($n == 2) {
                line("Congratulations, {$FIRST_NAME}!");
                break;
            }
            line("Correct!");
            $n++;
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$OppAnsw}.");
            line("Let's try again, {$FIRST_NAME}!");
            break;
        }
    }
}

//ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ_____________________

//генерируем рандомное число от 1 до 100
function RandomInt()
{
    $integer = round(mt_rand(0, 100));
    return $integer;
}
// задаем игроку вопрос и получаем его ответ в переменную $str
function question($integer)
{
    line("Question: {$integer}");
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
function AssumeEqual($str, $integer)
{
    if ($str == IsEven($integer)) {
        return true;
    } else {
        return false ;
    }
}
//формируем противоположный варинат ответа (чем у игрока) для вывода при проигрыше
function OppositeAnswer($str)
{
    switch ($str) {
        case 'yes':
            return 'no';
            break;
        case 'no':
            return 'yes';
            break;
    }
}
