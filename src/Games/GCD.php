<?php
namespace BrainGames\GCD;

use function \cli\line;
use function BrainGames\Cli\{run, hello};
use function BrainGames\GameFunc\{RandomInt,question,GCD, AssumeEqual};

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function GCDGame()
{
    hello();
    line('Find the greatest common divisor of given numbers.');
    $first_name = run();
    $n = 0;
    while ($n < 3) {
        $number_1 = RandomInt();
        $number_2 = RandomInt();
        //$number_1 = 39;
        //$number_2 = 80;
        $rightAnswer = GCD($number_1, $number_2);
        $userAnswer = question("{$number_1} {$number_2}");
        
        if (AssumeEqual($userAnswer, $rightAnswer)) {
            if ($n == 2) {
                line("Congratulations, {$first_name}!");
                break;
            } else {
                line("Correct!");
                $n++;
            }
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
            line("Let's try again, {$first_name}!");
            break;
        }
    }
}
