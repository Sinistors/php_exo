<?php
$a = 14;
$b = 22;
$c = 33;

if ($a >= $b && $a >= $c)
{
    echo $a;
}
elseif ($b >= $a && $b >= $c)
{
    echo $b;
}
else
{
    echo $c;
}

?>