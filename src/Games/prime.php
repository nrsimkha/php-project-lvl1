<?php

namespace BrainGames\Games\prime;

use function BrainGames\engine\startGame;

define("DESCRIPTION_PRIME", 'Answer "yes" if given number is prime. Otherwise answer "no".');

function primeGame()
{
    $generateGameData = function () {
        $question = round(mt_rand(0, 100));
        $rightAnswer = isPrime($question) ? "yes" : "no";
        return array($rightAnswer, $question);
    };
    startGame(DESCRIPTION_PRIME, $generateGameData);
}

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
