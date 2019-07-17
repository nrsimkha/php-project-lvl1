<?php
namespace BrainGames\Prime;

use function BrainGames\GameLogic\gameStart;

function primeGame()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $generateGameData = function () {
        $question = round(mt_rand(0, 100));
        $rightAnswer = isPrime($question) ? "yes" : "no";
        return array($rightAnswer, $question);
    };
    gameStart($description, $generateGameData);
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
