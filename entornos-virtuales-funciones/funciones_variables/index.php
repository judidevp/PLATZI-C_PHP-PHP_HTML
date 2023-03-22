<?php
function suma($n1, $n2)
{
    return  $n1()+ $n2();
}

function get_number_1()
{
    return 1;
}
function get_number_2()
{
    return 2;
}
function get_number_3()
{
    return 3;
}


echo suma("get_number_2", "get_number_3")."\n";



