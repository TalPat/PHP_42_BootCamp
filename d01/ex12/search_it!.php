#!/usr/bin/php
<?php

    function ft_split($str)
    {
		return (preg_split("/\s+/", trim($str)));
	}

	$key = $argv[1];
	$arr = array();
	for ($x = 2; $x < $argc; $x++)
	{
		$dtls = explode(":", $argv[$x]);
		$arr[$dtls[0]] = $dtls[1];
	}
	if ($arr[$key])
		echo "$arr[$key]\n";
?>
