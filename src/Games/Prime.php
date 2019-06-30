<?php
namespace BrainGames\Prime;

use function BrainGames\GameFunc\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function primeGame()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameName = 'Prime';
    gameStart($description, $gameName);
}

function generateGameData()
{
    $question = round(mt_rand(0, 100));
    $rightAnswer = isPrime($question);    
    return array($rightAnswer, $question);
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
