<?php
if (!function_exists('get_formatted_date')) {
    function get_formatted_date($date, $formate)
    {
        $formattedDate = date($formate, strtotime($date));
        return $formattedDate;
    }
}

if (!function_exists('p')) {
    function p($data)
    {
        echo "<pre>";
        print_r($data);
    }
}
