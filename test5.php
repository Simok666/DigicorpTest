<?php
    class countCharacter {
        function karakterTerbanyak($value) {
        
            $data = array_count_values(str_split($value));
            arsort($data);
            
            $getKey = key($data);

            $getCurrent = current($data);
            
            return "$getKey terdapat sebanyak $getCurrent kali ";
        }
    }

    $callClass = new countCharacter();

    $value1 = 'wellcome';
    echo $callClass->karakterTerbanyak($value1);
    
    $value2 = 'strawberry';
    echo $callClass->karakterTerbanyak($value2);
?>