<?php
if (!empty($_GET)) {
    echo canGo($_GET['x1'], $_GET['y1'], $_GET['x2'], $_GET['y2']) ? 'Yes' : 'No';
}

function canGo($x1, $y1, $x2, $y2): bool
{
   
    $diffX = abs($x2 - $x1);
    $diffY = abs($y2 - $y1);


    if (($diffX == 2 && $diffY == 1) || ($diffX == 1 && $diffY == 2)) {
        return true;
    } else {
        return false;
    }
}
