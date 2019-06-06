<?php
namespace BrainGames\Calc;

use function \cli\line;
use function BrainGames\Cli\{run, hello};
use function BrainGames\GameFunc\{RandomInt,question,Calculate, StdOut, AssumeEqual};

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function CalcGame()
{
    $signs = ['+', '*', '-'];
    $n = 0;
    hello();
    $FIRST_NAME = run();
    while ($n < 3) {
        $number_1 = RandomInt();
        $number_2 = RandomInt();
        $sign = $signs[round(mt_rand(0, 2))];
        $rightAnswer = Calculate($number_1, $number_2, $sign);
        $userAnswer = question("{$number_1} {$sign} {$number_2}");
        
        
        if (AssumeEqual($userAnswer, $rightAnswer)) {
            if ($n == 2) {
                line("Congratulations, {$FIRST_NAME}!");
                break;
            } else {
                line("Correct!");
                $n++;
            }
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
            line("Let's try again, {$FIRST_NAME}!");
            break;
        }
    }
}
