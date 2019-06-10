<?php
namespace BrainGames\Prime;

use function BrainGames\GameFunc\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function primeGame()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameName = 'Prime';
    gameStart($rules, $gameName);
}

function generateGameData()
{
    $number = round(mt_rand(0, 100));
    $rightAnswer = isPrime($number);
    $questionStr = $number;
    return array($rightAnswer, $questionStr);
}

function isPrime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return "no";
        }
    }
    return "yes";
}