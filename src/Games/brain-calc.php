<?php

namespace Brain\Games\Games\Brain\Calc;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\greeting;
use function Brain\Games\Engine\isAnswerCorrect;
use function Brain\Games\Engine\getCalc;

function brainCalc()
{
    $name = greeting();

    line('What is result of the expression?');
    $winStreakToWin = 3;
    $wins = 0;

    while ($wins < $winStreakToWin) {
        $correctAnswer = getCalc();
        if (isAnswerCorrect($name, $correctAnswer)) {
            $wins += 1;
        } else {
            return line("Let's try again, %s!", $name);
        }
    }
    return line("Congratulations, %s!", $name);
}
