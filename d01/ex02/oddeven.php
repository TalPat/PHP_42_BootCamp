#!/usr/bin/php
<?php

    function    ft_checkline($line)
    {
        if (is_numeric($line)) {
            if ($line % 2)
                echo "The number $line is odd\n";
            else
                echo "The number $line is even\n";
        }
        else {
            echo "'$line' is not a number\n";
        }
    }

    while (1) {
        echo "Enter a number: ";
        $handle = fopen ("php://stdin", "r");
        $line = fgets($handle);
        if (empty($line)){
            fclose($handle);
            echo "\n";
            break ;
        }
        $line = trim($line);
        ft_checkline($line);
    }

?>
