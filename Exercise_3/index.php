<?php
/**
 * In PHP, display numbers from 1 to 100 (one per line). If the number is divisible by 3,
 * display the word "Team" next to it. If the number is divisible by 5, display "LEBLEU" next to it.
 * If the figure is divisible by 3 and 5, display “LEBLEU team”.
 */

const DISPLAY_NUMBERS_AMOUNT = 100;

const DIVISION_WORDS = [
    3 => 'Team',
    5 => 'LEBLEU',
];

function generateMessage(int $number): string
{
    $message = $number;

    foreach (DIVISION_WORDS as $int => $word) {
        if ($number % $int === 0) {
            $message .= " $word";
        }
    }

    return $message;
}

$i = 1;

while ($i <= DISPLAY_NUMBERS_AMOUNT) {
    echo generateMessage($i);
    echo PHP_EOL;
    $i++;
}
