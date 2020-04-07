<?php
namespace BrainGames\progression;

use function BrainGames\GameLogic\startGame;

define("DESCRIPTION_PROGRESSION", 'What number is missing in the progression?');
define("PROGRESSION_LENGHT", 10);

function progressionGame()
{
    $generateGameData = function () {
        $progression = [];
        $start = round(mt_rand(1, 100));
        $step = round(mt_rand(1, 10));
        $missingValue = round(mt_rand(0, PROGRESSION_LENGHT - 1));
        for ($i = 0; $i < PROGRESSION_LENGHT; $i++) {
            $progression[] = $start + $step * $i;
        }
        $rightAnswer = $progression[$missingValue];
        $progression[$missingValue] = "..";
        $question = implode(' ', $progression);
        return array($rightAnswer, $question);
    };
    startGame(DESCRIPTION_PROGRESSION, $generateGameData);
}
