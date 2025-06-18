<?php
$nombres = [10, 42, 5, 8, 42, 19];
$recherche = 42;

if (in_array($recherche, $nombres))
{
    for ($i = 0; $i < count($nombres); $i++)
    {
        if ($nombres[$i] == $recherche)
        {
            echo $i;
        }
    }
}
else
{
    echo "pas trouvé";
}
?>