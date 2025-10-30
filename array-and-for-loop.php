<?php
$fruits = array(
    array('name' => 'banana',),
    array('name' => 'apple',),
    array('name' => 'lemon',),
    array('name' => 'kiwi',),
);
for($i = 0; $i < count($fruits); ++$i) {
    echo $fruits[$i]["name"];
    echo' :';
}







?>