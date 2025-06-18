<?php
function arrayWon($array):bool
{
    if (in_array(' ', $array))
    {
        return false;
    }
    if($array[0] == $array[1] && $array[1] == $array[2])
    {
        return true;
    }
    return false;
}
function isWon($grid):bool
{
    $size = 3;

    //Check diagonals
    if ($grid[1][1] != ' ')
    {
        if (arrayWon([$grid[0][0], $grid[1][1], $grid[2][2]]))
        {
            return true;
        }
        if (arrayWon([$grid[0][2], $grid[1][1], $grid[2][0]]))
        {
            return true;
        }
    }

    for ($i = 0; $i < $size; $i++)
    {
        //Check line
        if (arrayWon($grid[$i]))
        {
            return true;
        }
        //Check column
        if (arrayWon([$grid[0][$i], $grid[1][$i], $grid[2][$i]]))
        {
            return true;
        }
    }

    return false;
}
$grille = [['0','X','X'],
           ['0','0',' '],
           ['0',' ','X']];

if (isWon($grille))
{
    echo "Il y a un gagnant";
}
else
{
    echo "Il n'y a pas de gagnant";
}

?>