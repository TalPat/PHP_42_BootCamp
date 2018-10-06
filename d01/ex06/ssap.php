#!/usr/bin/php
<?php

    function ft_split($str)
    {
		return (preg_split("/\s+/", trim($str)));
	}

	$arr = array();
	for ($x = 1; $x < $argc; $x++)
	{
		$arrsplit = ft_split($argv[$x]);
		$arr = array_merge($arr, $arrsplit);
	}
	sort($arr);
	foreach ($arr as $str)
	{
		echo "$str\n";
	}
?>
