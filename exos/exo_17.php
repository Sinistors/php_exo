<?php
$mot = 'ordinateur';
$lettre = 'r';
$mot = strtolower($mot);

$positions = [];
for ($i = 0; $i < strlen($mot); $i++)
{
    if($mot[$i] == $lettre)
    {
        $positions[] = $i;
    }
}

if (count($positions) == 0)
{
    echo "pas de valeur trouvées";
}
else
{
    echo "positions trouvées à :";
    foreach ($positions as $position)
    {
        echo " " . $position;
    }
}

?>