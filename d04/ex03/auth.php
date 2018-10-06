<?php

	function auth($login, $passwd)
	{
		$found = 0;
		if (file_exists("../private/passwd"))
			{
			$accounts = file_get_contents("../private/passwd");
			$accounts = unserialize($accounts);
			foreach ($accounts as $key=>$val)
				if ($login == $key)
					if (hash("whirlpool", $passwd) == $val[passwd])
						$found = 1;
			if ($found == 1)
				return (true);
			else
				return (false);
		}
	}

?>
