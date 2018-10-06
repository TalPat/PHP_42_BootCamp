#!/usr/bin/php
<?php

    function ft_split($str)
    {
		return (preg_split("/\s+/", trim($str)));
	}

	if ($argc == 4)
	{
		$first = trim($argv[1]);
		$op = trim($argv[2]);
		$second = trim($argv[3]);
		if ($op == "+")
			$ans = $first + $second;
		else if ($op == "-")
			$ans = $first - $second;
		else if ($op == "*")
			$ans = $first * $second;
		else if ($op == "/")
			$ans = $first / $second;
		else if ($op == "%")
			$ans = $first % $second;
		echo "$ans\n";
	}
	else
		echo "Incorrect Parameters\n";
?>
