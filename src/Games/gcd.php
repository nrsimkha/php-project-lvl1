<?php

namespace BrainGames\Games\gcd;

use function BrainGames\engine\startGame;

define("DESCRIPTION_GCD", 'Find the greatest common divisor of given numbers.');

function gcdGame()
{
    $generateGameData = function () {
        $a = round(mt_rand(0, 100));
        $b = round(mt_rand(0, 100));
        $rightAnswer = getGcd($a, $b);
        $question = "$a $b";
        return array($rightAnswer, $question);
    };
    startGame(DESCRIPTION_GCD, $generateGameData);
}

function getGcd($a, $b)
{
    $maxValue = max($a, $b);
    $minValue = min($a, $b);
    $remainder = $minValue;
    while ($maxValue % $minValue !== 0) {
        $remainder = $maxValue % $minValue;
        $maxValue = $minValue;
        $minValue = $remainder;
    }
    return $remainder;
}
