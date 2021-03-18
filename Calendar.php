<?php
class Calendar{
public function showday($date,$month){ 
$day = "2021-$month-$date";
$dayOfWeek = date("l", strtotime($day));
echo $day . ' เป็นวัน ';
return $dayOfWeek;
    }
}