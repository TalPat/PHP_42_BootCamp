<?php

	if ($_POST[submit] == "OK")
	{
		if ($_POST[login] && $_POST[passwd])
		{
			$accounts = array();
			mkdir("../private");
			if (file_exists("../private/passwd"))
			{
				$accounts = unserialize(file_get_contents("../private/passwd"));
				foreach ($accounts as $key => $val)
				{
					if ($key == $_POST[login])
					{
						echo "ERROR\n";
						echo "User exists\n";
						exit;
					}
				}
			}
			$data = array("login" => $_POST[login], "passwd" => hash("whirlpool", $_POST[passwd]));
			$accounts[$_POST[login]] = $data;
			file_put_contents("../private/passwd", serialize($accounts));
		}
	}
	else
	{
		echo "ERROR\n";
		echo "Invalid data\n";
	}
?>
