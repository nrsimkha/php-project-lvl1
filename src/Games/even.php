<?php
namespace BrainGames\even;

use function BrainGames\GameLogic\startGame;

define("DESCRIPTION_EVEN", 'Answer "yes" if number even otherwise answer "no".');

function evenGame()
{
    $generateGameData = function () {
        $question = round(mt_rand(0, 100));
        $rightAnswer = isEven($question) ? "yes" : "no";
        return array($rightAnswer, $question);
    };
    startGame(DESCRIPTION_EVEN, $generateGameData);
}

function isEven($number)
{
    return $number % 2 === 0;
}
