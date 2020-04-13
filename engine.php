<?php

namespace BrainGames\GameLogic;

use function \cli\line;

function startGame($rules, $generateGameData)
{
    line('Welcome to the Brain Game!!');
    line($rules);
    $userName = \cli\prompt('May I have your name please?');
    line("Hello, %s!", $userName);
    for ($round = 0; $round < 3; $round++) {
        $gameData = $generateGameData();
        $rightAnswer = $gameData[0];
        $questionRow = $gameData[1];
        line("Question: {$questionRow}");
        $userAnswer = \cli\prompt("Your answer");
        if ($userAnswer == $rightAnswer) {
            if ($round == 2) {
                line("Congratulations, {$userName}!");
            } else {
                line("Correct!");
            }
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
            line("Let's try again, {$userName}!");
            exit;
        }
    }
}
