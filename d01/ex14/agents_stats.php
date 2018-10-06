#!/usr/bin/php
<?php

	function cmp($a, $b)
	{
		if ($a[0] == $b[0])
			return (0);
		return ($a[0] < $b[0]) ? -1 : 1;
	}

	function ft_printav($arr)
	{
		$tot = 0;
		$count = 0;

		foreach($arr as $elem)
		{
			if (is_numeric($elem[1]))
			{
				$tot += $elem[1];
				$count++;
			}
		}
		echo ($tot/$count."\n");
	}

	function ft_printavusr($arr)
	{
		$usrs = array();
		foreach($arr as $elem)
		{
			if (!in_array($elem[0], $usrs))
			{
				$tot = 0;
				$count = 0;
				array_push($usrs, $elem[0]);
				foreach($arr as $elemusr)
				{
					if (is_numeric($elemusr[1]) && $elemusr[0] == $elem[0])
					{
						$tot += $elemusr[1];
						$count++;
					}
				}
				echo ($elem[0].":".$tot/$count."\n");
			}
		}
	}

	$arr = array();
	$counter = 0;
	$handle = fopen ("php://stdin", "r");
	$str = fgets($handle);
	while ($str = fgets($handle))
	{
		array_push($arr, str_getcsv($str, ";"));
	}
	usort($arr, "cmp");
	if ($argc == 2)
	{
		if ($argv[1] == "average")
			ft_printav($arr);
		else if ($argv[1] == "average_user")
			ft_printavusr($arr);
		else if ($argv[1] == "moulinette_variance")
			ft_var($arr);
	}
?>
