#!/usr/bin/php
<?php

    function ft_split($str)
    {
		return (preg_split("/\s+/", trim($str)));
	}

?>
