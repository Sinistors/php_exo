<?php
for ($i = 0; $i < 100; $i++)
{
    $de1 = rand(1, 6);
    $de2 = rand(1, 6);
    $sum = $de1 + $de2;
    echo "Dé 1 : " . $de1 . " Dé 2 : " . $de2 . " Somme : " . $sum;
    if ($sum == 7 || $sum == 11)
    {
        echo " Gagné !<br>";
    }
    else
    {
        echo " Perdu !<br>";
    }
}

?>