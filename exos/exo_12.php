<?php
$limite = 50;
$multipleDe = 7;

$count = 0;
for($i = 1; $i <= $limite; $i++)
{
    if ($i % $multipleDe == 0)
    {
        $count++;
    }
}
echo "Il y a " . $count . " multiples de " . $multipleDe . " entre 1 et " . $limite;
?>