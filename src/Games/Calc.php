<?php
namespace BrainGames\Calc;

use function BrainGames\GameFunc\gameStart;

define("SIGNS", ['+', '*', '-']);


//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function calcGame()
{
    $description = 'What is the result of the expression?';
    $gameName = 'Calc';
    gameStart($description, $gameName);
}

function generateGameData()
{
    $number1 = round(mt_rand(0, 100));
    $number2 = round(mt_rand(0, 100));
    $sign = SIGNS[round(mt_rand(0, sizeof(SIGNS)-1))];
    $rightAnswer = calculateEquationResult($number1, $number2, $sign);
    $question = "{$number1} {$sign} {$number2}";
    return array($rightAnswer, $question);
}

// считаем сумму, произведение или разность чисел
function calculateEquationResult($number1, $number2, $operation)
{
    switch ($operation) {
        case '+':
            return $number1 + $number2;
            break;
        case '-':
            return $number1 - $number2;
            break;
        case '*':
            return $number1 * $number2;
            break;
    }
}
