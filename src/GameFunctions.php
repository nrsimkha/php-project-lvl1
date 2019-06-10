<?php

namespace BrainGames\GameFunc;

use function \cli\line;

//ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ_____________________

function gameStart($rules, $gameName)
{
    line('Welcome to the Brain Game!!');
    line($rules);
    $userName = \cli\prompt('May I have your name please?');
    line("Hello, %s!", $userName);
    $functionName = "BrainGames\\" . $gameName . "\\generateGameData";
    $round = 0;
    while ($round < 3) {
        $dataArray = call_user_func($functionName, '');
        $rightAnswer = $dataArray[0];
        $questionRow = $dataArray[1];
        $userAnswer = displayRoundQuestion($questionRow);
        displayRoundResult($userAnswer, $rightAnswer, $userName, $round);
        $round++;
    }
}

//генерация ответа игроку
function displayRoundResult($userAnswer, $rightAnswer, $userName, $round)
{
    if (assumeEqual($userAnswer, $rightAnswer)) {
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


// задаем игроку вопрос и получаем его ответ в переменную $str
function displayRoundQuestion($question)
{
    line("Question: {$question}");
    $userAnswer = \cli\prompt("Your answer");
    return $userAnswer;
}

//проверка совпадает ли ответ игрока с правильным ответом
function assumeEqual($userAnswer, $rightAnswer)
{
    if ($userAnswer == $rightAnswer) {
        return true;
    } else {
        return false ;
    }
}
