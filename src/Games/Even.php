<?php
namespace BrainGames\Even;

use function BrainGames\GameFunc\gameStart;

//ОСНОВНАЯ ЛОГИКА ИГРЫ____________________________

function generateGameData()
{
    $integer = round(mt_rand(0, 100));
    $rightAnswer = ($integer % 2 === 0) ? "yes" : "no";
    $question = $integer;
    return array($rightAnswer, $question);
}

function EvenGame()
{
    $description = 'Answer "yes" if number even otherwise answer "no".';
    $namespace = 'Even';
    gameStart($description, $namespace);
}
