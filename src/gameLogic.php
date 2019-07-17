<?php

namespace BrainGames\GameLogic;

use function \cli\line;

function gameStart($rules, $generateGameData)
{
    line('Welcome to the Brain Game!!');
    line($rules);
    $userName = \cli\prompt('May I have your name please?');
    line("Hello, %s!", $userName);
    $round = 0;
    for ($i = 0; $i < 3; $i++) {
        $dataArray = call_user_func($generateGameData, '');
        $rightAnswer = $dataArray[0];
        $questionRow = $dataArray[1];
        line("Question: {$questionRow}");
        $userAnswer = \cli\prompt("Your answer");
        if ($userAnswer == $rightAnswer) {
            if ($round == 2) {
                line("Congratulations, {$userName}!");
                exit;
            } else {
                line("Correct!");
            }
        } else {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
            line("Let's try again, {$userName}!");
            exit;
        }
        //displayRoundResult($userAnswer, $rightAnswer, $userName, $round);
        $round++;
    }
}

//генерация ответа игроку
/*function displayRoundResult($userAnswer, $rightAnswer, $userName, $round)
{
    if ($userAnswer == $rightAnswer) {
        if ($round == 2) {
            line("Congratulations, {$userName}!");
            exit;
        } else {
            line("Correct!");
        }
    } else {
        line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
        line("Let's try again, {$userName}!");
        exit;
    }
}*/
