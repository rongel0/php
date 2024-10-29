<?php 
$array = [1,3,5,7,9,11,13];

for($i = 0; $i < count($array); ++$i ){
    
    if($array[$i] < 13 ){
        echo $array[$i].PHP_EOL;
        continue;
    }

    if($array[$i] == 13 ){
        echo $array[$i].PHP_EOL;
        echo "for_out".PHP_EOL;
        break;
    }

}

?>