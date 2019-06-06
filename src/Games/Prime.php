<?php
namespace BrainGames\Prime;

use function \cli\line;
use function BrainGames\Cli\{run, hello};
use function BrainGames\GameFunc\{RandomInt,question, AssumeEqual,StdOut};

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________
function IsPrime($number){
    for($i = 2; $i < $number; $i++) {
        if($number % $i == 0){
            return "no";
        }
    }
    return "yes";
}

function PrimeGame()
{
    hello();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $first_name = run();
    $n = 0;
    $number = round(mt_rand(1, 200));
    while ($n < 3) {
        $number = round(mt_rand(1, 200));
        $rightAnswer = IsPrime($number);
        $userAnswer = question($number);
        StdOut($userAnswer, $rightAnswer, $first_name, $n);
        $n++;
    }
}
