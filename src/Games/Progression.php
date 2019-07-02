<?php
namespace BrainGames\Progression;

use function \cli\line;
use function BrainGames\Cli\{run, hello};
use function BrainGames\GameFunc\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________
function ProgressionGame()
{
    $description = 'What number is missing in the progression?';
    $gameName = 'Progression';
    $generateGameData = function () {
        $array = [];
        $sizeOfProgression = 10;
        $start = round(mt_rand(1, 100));
        $step = round(mt_rand(1, 10));
        $missing = round(mt_rand(0, $sizeOfProgression - 1));
        for ($i = 0; $i < $sizeOfProgression; $i++) {
            $array[] = $start + $step * $i;
        }
        $rightAnswer = $array[$missing];
        $array[$missing] = "..";
        $questionRow = implode(' ', $array);
        return array($rightAnswer, $questionRow);
    };
    gameStart($description, $generateGameData);
}
