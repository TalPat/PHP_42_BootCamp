#!/usr/bin/php
<?php

    function ft_split($str)
    {
		return (preg_split("/\s+/", trim($str)));
	}

	function ft_getop($str)
	{
		return(trim($str, "1234567890 "));
	}

	function ft_is_op($str)
	{
		$ops = array("+", "-", "*", "/", "%");
		return (in_array($str, $ops));
	}

	function ft_do_op($op, $first, $second)
	{
		if ($op == "+")
			$ans = $first + $second;
		else if ($op == "-")
			$ans = $first - $second;
		else if ($op == "*")
			$ans = $first * $second;
		else if ($op == "/")
		{
			if ($second == 0)
				$ans = "Div by zero";
			else
				$ans = $first / $second;
		}	
		else if ($op == "%")
		{
			if ($second == 0)
				$ans = "Mod by zero";
			else
				$ans = $first % $second;
		}	
		echo "$ans\n";
	}

	if ($argc == 2)
	{
		$op = ft_getop($argv[1]);
		$flag = 0;
		$arrnum = explode($op, $argv[1]);
		$arrnum[0] = trim($arrnum[0], " ");
		$arrnum[1] = trim($arrnum[1], " ");
		if (ft_is_op($op) && is_numeric($arrnum[0]) && is_numeric($arrnum[1])
			&& count($arrnum) == 2)
			ft_do_op($op, $arrnum[0], $arrnum[1]);
		else
			echo "Syntax Error\n";
	}
	else
		echo "Incorrect Parameters\n";
?>