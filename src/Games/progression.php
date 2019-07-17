<?php
namespace BrainGames\Progression;

use function BrainGames\GameLogic\gameStart;

function progressionGame()
{
    $description = 'What number is missing in the progression?';
    $generateGameData = function () {
        $progression = [];
        $progressionLength = 10;
        $start = round(mt_rand(1, 100));
        $step = round(mt_rand(1, 10));
        $missingNumber = round(mt_rand(0, $progressionLength - 1));
        for ($i = 0; $i < $progressionLength; $i++) {
            $progression[] = $start + $step * $i;
        }
        $rightAnswer = $progression[$missingNumber];
        $progression[$missingNumber] = "..";
        $question = implode(' ', $progression);
        return array($rightAnswer, $question);
    };
    gameStart($description, $generateGameData);
}
