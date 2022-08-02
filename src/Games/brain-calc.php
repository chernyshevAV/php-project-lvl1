<?php

namespace Brain\Games\Games\Brain\Calc;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\greeting;
use function Brain\Games\Engine\game;

function brainCalc()
{
    $name = greeting();

    line('What is result of the expression?');
    game($name, function()
    {
        $operators = ['+', '-', '*'];
        shuffle($operators);
        $firstNum = mt_rand(1, 20);
        $secondNum = mt_rand(1, 20);
        switch ($operators[0]) {
            case '+':
                line("Question: {$firstNum} + {$secondNum}");
                return $firstNum + $secondNum;
            case '-':
                line("Question: {$firstNum} - {$secondNum}");
                return $firstNum - $secondNum;
            case '*':
                $firstNum = mt_rand(1, 10);
                $secondNum = mt_rand(1, 10);
                line("Question: {$firstNum} * {$secondNum}");
                return $firstNum * $secondNum;
        }
    });
}
