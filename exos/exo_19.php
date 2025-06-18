<?php
$operations = ['+', '-', '*', '/'];
$a = 12;
$b = 0;

foreach ($operations as $op)
{
    switch ($op) {
        case '+':
            echo $a . " + " . $b . " = " . $a + $b . "<br>";
            break;
        case '-':
            echo $a . " - " . $b . " = " . $a - $b . "<br>";
            break;
        case "*":
            echo $a . " * " . $b . " = " . $a * $b . "<br>";
            break;
        case "/":
            if ($b == 0)
            {
                echo "Division par 0 impossible.<br>";
            }
            else
            {
                echo $a . " / " . $b . " = " . $a / $b;
            }
            break;
    }
}

?>