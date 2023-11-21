<?php
    // n inklusif itu mencakup smua bil bulat dari 1 hingga n 
    // ex n = 5 jadinya {1,2,3,4,5}
    function generator($end)
    {
        for ($index = 1; $index <= $end; $index++) {
            if ($index % 3 == 0 && $index % 5 == 0) {
                echo "HelloWorld\n";
            } else if ($index % 3 == 0) {
                echo "Hello\n";
            } else if ($index % 5 == 0) {
                echo "World\n";
            } else {
                echo $index . "\n";
            }
        }
    }
    generator(15);
?>