<?php
namespace BrainGames\Calc;

use function BrainGames\GameLogic\gameStart;

define("SIGNS", ['+', '*', '-']);

function calcGame()
{
    $description = 'What is the result of the expression?';
    $generateGameData = function () {
        $number1 = round(mt_rand(0, 100));
        $number2 = round(mt_rand(0, 100));
        $sign = SIGNS[round(mt_rand(0, sizeof(SIGNS) - 1))];
        $rightAnswer = calculateExpression($number1, $number2, $sign);
        $question = "{$number1} {$sign} {$number2}";
        return array($rightAnswer, $question);
    };
    gameStart($description, $generateGameData);
}

function calculateExpression($number1, $number2, $operation)
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
