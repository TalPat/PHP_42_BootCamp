#!/usr/bin/php
<?php

	$arr = array("Why this demo ?" =>  array("To avoid people noticing this while going over the subject briefly", "To avoid people noticing this while going over the subject briefly"),
				"Why this song ?" =>  array("Because we're all children inside", "Because we're all children inside"),
				"really ?" => array("No it's because it's april's fool", "Yeah we really are all children inside"));
	$x = rand(0,1);	
	if ($argc == 2)
	{
		if ($arr[$argv[1]])
			echo ($arr[$argv[1]][$x]."\n");
	}
?>
