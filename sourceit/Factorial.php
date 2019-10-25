<?php

/*
function factorial ($n)
{
    if($n <= 1) 
    {
        return 1;
    }
    else 
    {
        return $n * factorial($n - 1);
    }
}
echo factorial(5);
 * 
 */


$arr = [1,2,4,5, [34, 7, 89, [5,56,7]], [4,6,99,2],[12, [45, [[45],[7]]]]];
function awr ($arr)
{
    echo "$arr\n"; {
    echo '<pre/>';
    }
}
$awr = array_walk_recursive($arr, 'awr');
