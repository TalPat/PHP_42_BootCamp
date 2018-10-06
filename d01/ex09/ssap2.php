#!/usr/bin/php
<?php

    function ft_split($str)
    {
		return (preg_split("/\s+/", trim($str)));
	}

	$arr = array();
	$arrnum = array();
	$arralpha = array();
	$arrspec = array();
	for ($x = 1; $x < $argc; $x++)
	{
		$arrsplit = ft_split($argv[$x]);
		$arr = array_merge($arr, $arrsplit);
	}
	sort($arr);
	foreach ($arr as $str)
	{
		if (is_numeric($str))
			array_push($arrnum, $str);
		else if (ctype_alpha($str))
			array_push($arralpha, $str);
		else
			array_push($arrspec, $str);
	}
	sort($arrnum, SORT_STRING);
	sort($arralpha, SORT_FLAG_CASE | SORT_NATURAL);
	sort($arrspec);
	foreach ($arralpha as $str)
	{
		echo "$str\n";
	}
	foreach ($arrnum as $str)
	{
		echo "$str\n";
	}
	foreach ($arrspec as $str)
	{
		echo "$str\n";
	}
?>
