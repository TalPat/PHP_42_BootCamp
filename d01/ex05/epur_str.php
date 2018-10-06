#!/usr/bin/php
<?php

    function ft_split($str)
    {
		return (preg_split("/\s+/", trim($str)));
	}

	if ($argc > 1)
	{
		$arr = ft_split($argv[1]);
		echo ($arr[0]);
		for ($x = 1; $x < count($arr); $x++)
		{
			echo " $arr[$x]";
		}
		echo "\n";
	}
?>
