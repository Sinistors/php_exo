<?php
$valeurs = [8, 3, 5, 1, 9];

$min = $valeurs[0];
foreach ($valeurs as $valeur)
{
    if ($min > $valeur)
    {
        $min = $valeur;
    }
}
echo $min;
?>