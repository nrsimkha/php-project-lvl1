<?php
namespace BrainGames\Calc;

use function BrainGames\GameFunc\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function calcGame()
{
    $rules = 'What is the result of the expression?';
    $gameName = 'Calc';
    gameStart($rules, $gameName);
}

function generateGameData()
{
    $signs = ['+', '*', '-'];
    $number1 = round(mt_rand(0, 100));
    $number2 = round(mt_rand(0, 100));
    $sign = $signs[round(mt_rand(0, 2))];
    $rightAnswer = calculateEquationResult($number1, $number2, $sign);
    $questionStr = "{$number1} {$sign} {$number2}";
    return array($rightAnswer, $questionStr);
}

// считаем сумму, произведение или разность чисел
function calculateEquationResult($number1, $number2, $operationalSign)
{
    switch ($operationalSign) {
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
