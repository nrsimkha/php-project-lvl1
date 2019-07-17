<?php
namespace BrainGames\GCD;

use function BrainGames\GameLogic\gameStart;

function gcdGame()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $generateGameData = function () {
        $a = round(mt_rand(0, 100));
        $b = round(mt_rand(0, 100));
        $rightAnswer = getGCD($a, $b);
        $question = "$a $b";
        return array($rightAnswer, $question);
    };
    gameStart($description, $generateGameData);
}

function getGCD($a, $b)
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
