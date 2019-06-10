<?php
namespace BrainGames\Progression;

use function \cli\line;
use function BrainGames\Cli\{run, hello};
use function BrainGames\GameFunc\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________
function generateGameData()
{
    $array = [];
    $start = round(mt_rand(1, 100));
    $step = round(mt_rand(1, 10));
    $missing = round(mt_rand(0, 9));
    for ($i = 0; $i < 10; $i++) {
        $array[] = $start + $step * $i;
    }
    $rightAnswer = $array[$missing];
    $array[$missing] = "..";
    $questionRow = implode(' ', $array);
    return array($rightAnswer, $questionRow);
}

function ProgressionGame()
{
    $rules = 'What number is missing in the progression?';
    $gameName = 'Progression';
    gameStart($rules, $gameName);
}
