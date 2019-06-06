<?php
  namespace BrainGames\Cli;
  
  use function \cli\line;

function hello()
{
    line('Welcome to the Brain Game!!');
    line('What is the result of the expression?');
}

function run()
{
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
