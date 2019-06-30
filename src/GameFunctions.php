<?php

namespace BrainGames\GameFunc;

use function \cli\line;

function gameStart($rules, $gameName)
{
    line('Welcome to the Brain Game!!');
    line($rules);
    $userName = \cli\prompt('May I have your name please?');
    line("Hello, %s!", $userName);
    $functionName = "BrainGames\\" . $gameName . "\\generateGameData";
    $round = 0;
    for ($i=0; $i < 3; $i++) { 
        $dataArray = call_user_func($functionName, '');
        $rightAnswer = $dataArray[0];
        $questionRow = $dataArray[1];
        line("Question: {$questionRow}");
        $userAnswer = \cli\prompt("Your answer");        
        displayRoundResult($userAnswer, $rightAnswer, $userName, $round);
        $round++;    
    }

}

//генерация ответа игроку
function displayRoundResult($userAnswer, $rightAnswer, $userName, $round)
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
}
