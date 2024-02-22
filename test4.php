<?php
    class getData {
        function getBigSecondValue($data) {
            rsort($data);
            
            return $data[1];
        }
    }

    $obj = new getData();
    $array = [100, 90, 95, 77];

    echo $obj->getBigSecondValue($array);
?>