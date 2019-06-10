<?php
namespace BrainGames\Even;

use function BrainGames\GameFunc\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function generateGameData()
{
    $integer = round(mt_rand(0, 100));
    $rightAnswer = isEven($integer);
    $questionStr = $integer;
    return array($rightAnswer, $questionStr);
}

// проверка является ли число четным
function isEven($integer)
{
    if ($integer % 2 === 0) {
        return "yes";
    } else {
        return "no";
    }
}

function EvenGame()
{
    $rules = 'Answer "yes" if number even otherwise answer "no".';
    $namespace = 'Even';
    gameStart($rules, $namespace);
}
