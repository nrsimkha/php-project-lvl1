<?php
namespace BrainGames\GCD;

use function BrainGames\GameFunc\gameStart;


//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function gcdGame()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $gameName = 'GCD';
    gameStart($description, $gameName);
}

function generateGameData()
{
    $number1 = round(mt_rand(0, 100));
    $number2 = round(mt_rand(0, 100));
    $rightAnswer = getGCD($number1, $number2);
    $question = "$number1 $number2";
    return array($rightAnswer, $question);
}

// считаем сумму, произведение или разность чисел
function getGCD($number1, $number2)
{
    $maxValue = max($number1, $number2);
    $minValue = min($number1, $number2);
    $remainder = $minValue;
    while ($maxValue % $minValue !== 0) {
        $remainder = $maxValue % $minValue;
        $maxValue = $minValue;
        $minValue = $remainder;
    }
    return $remainder;
}
