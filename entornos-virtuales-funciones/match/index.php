<?php

function get_country_name_switch($country)
{
    switch ($country)
    {
        case "bol":
            $country="bolivia";
            break;
        case "ven":
            $country="venezuela";
        default:
            $country="no existe";
            break;
    }
    return $country;
}

function get_country_name_match($country)
{
    return match($country)
    {
        "pe"=>"peru",
        "col"=>"colombia",
        default=>"no existe"
    };
}

function get_country_name($country): int
{
    switch ($country)
    {
        case "bol":
            $country="bolivia";
            break;
        case "ven":
            $country="venezuela";
        default:
            $country="no existe";
            break;
    }
    return $country;
}

echo get_country_name("bol")."\n";




