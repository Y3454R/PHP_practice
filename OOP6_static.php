<?php

    class Weather {
        public static $tempStates = ['cold', 'mild', 'warm'];
        public static function celsiusToFarenheit($c) {
            return $c * 9 / 5 + 32;
        }
        public static function determineTempState($f) {
            if($f < 40) {
                return self::$tempStates[0];
            }
            else if($f < 70) {
                return self::$tempStates[1];
            }
            else {
                return self::$tempStates[2];
            }
        }
    }

    print_r(Weather::$tempStates);
    echo '<br>';
    echo Weather::celsiusToFarenheit(20);
    echo '<br>';
    echo Weather::determineTempState(50);
    echo '<br>';

?>

<!DOCTYPE html>
<html>
<head>
    <title>OOP</title>
</head>
<body>



</body>
</html>
