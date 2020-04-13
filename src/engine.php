<?php

namespace BrainGames\engine;

use function cli\line;
use function cli\prompt as output;

define("NUMBER_OF_ROUNDS", 3);

function startGame($rules, $generateGameData)
{
    line('Welcome to the Brain Game!!');
    line($rules);
    $userName = output('May I have your name please?');
    line("Hello, %s!", $userName);
    for ($round = 0; $round < NUMBER_OF_ROUNDS; $round++) {
        $gameData = $generateGameData();
        [$rightAnswer, $questionRow] = $gameData;
        line("Question: {$questionRow}");
        $userAnswer = output("Your answer");
        if ($userAnswer == $rightAnswer) {
            line("Correct!");
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
            line("Let's try again, {$userName}!");
            return;
        }
    }
    line("Congratulations, {$userName}!");
}
