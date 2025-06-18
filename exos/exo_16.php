<?php
$mysteres = [38, 72, 15];

foreach ($mysteres as $nb)
{
    $random = rand(1,100);
    $count = 1;
    while($random != $nb)
    {
        $random = rand(1,100);
        $count++;
    }
    echo "Trouvé " . $nb . " en " . $count . " essais<br>";
}
?>