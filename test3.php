<?php
    $index = 0;
    function getTrafficColor(){
        global $index;

        $color = ['merah', 'kuning', 'hijau'];
        $colorKey =  $color[$index];

        $index = ($index + 1) % count($color);

        return $colorKey;
    }

    echo getTrafficColor(). "\n";
    echo getTrafficColor(). "\n";
    echo getTrafficColor(). "\n"; 
    echo getTrafficColor(). "\n"; 
    

?>