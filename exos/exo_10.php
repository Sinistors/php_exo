<?php
$mot = 'radar';

$lowMot = strtolower($mot);


$inverseMot = "";

for ($i = strlen($lowMot) - 1; $i >= 0; $i--)
{
    $inverseMot .= $lowMot[$i];
}
if ($inverseMot == $mot)
{
    echo $mot . " est un palindrome";
}
else
{
    echo $mot . " n'est pas un palindrome";
}
?>