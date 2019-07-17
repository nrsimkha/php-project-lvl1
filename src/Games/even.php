<?php
namespace BrainGames\Even;

use function BrainGames\GameLogic\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function evenGame()
{
    $description = 'Answer "yes" if number even otherwise answer "no".';
    $generateGameData = function () {
        $integer = round(mt_rand(0, 100));
        $rightAnswer = isEven($integer) ? "yes" : "no";
        return array($rightAnswer, $integer);
    };
    gameStart($description, $generateGameData);
}

function isEven($number)
{
    return $number % 2 === 0;
}
