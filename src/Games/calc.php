<?php

namespace BrainGames\Games\calc;

use function BrainGames\engine\startGame;

define("SIGNS", ['+', '*', '-']);
define("DESCRIPTION_CALC", 'What is the result of the expression?');

function calcGame()
{
    $generateGameData = function () {
        $a = round(mt_rand(0, 100));
        $b = round(mt_rand(0, 100));
        $sign = SIGNS[array_rand(SIGNS, 1)];
        $rightAnswer = calculateExpression($a, $b, $sign);
        $question = "{$a} {$sign} {$b}";
        return array($rightAnswer, $question);
    };
    startGame(DESCRIPTION_CALC, $generateGameData);
}

function calculateExpression($a, $b, $operation)
{
    switch ($operation) {
        case '+':
            return $a + $b;
            break;
        case '-':
            return $a - $b;
            break;
        case '*':
            return $a * $b;
            break;
    }
}
