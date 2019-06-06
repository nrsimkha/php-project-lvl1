<?php
namespace BrainGames\Progression;

use function \cli\line;
use function BrainGames\Cli\{run, hello};
use function BrainGames\GameFunc\{RandomInt,question, AssumeEqual,StdOut};

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________


function ProgressionGame()
{
    hello();
    line('What number is missing in the progression?');
    $first_name = run();
    $n = 0;
    while ($n < 3) {
        $start = round(mt_rand(1, 100));
        $step = round(mt_rand(1, 10));
        $array = [];
        $missing = round(mt_rand(0, 9));
        for ($i = 0; $i < 10; $i++) {
            $array[] = $start + $step * $i;
        }
        $rightAnswer = $array[$missing];
        $array[$missing] = "..";
        $questionRow = implode(' ', $array);
        $userAnswer = question($questionRow);
        StdOut($userAnswer, $rightAnswer, $first_name, $n);
        $n++;
    }
}
