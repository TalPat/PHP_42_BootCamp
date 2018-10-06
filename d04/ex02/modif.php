<?php

    $found = 0;
	if ($_POST[submit] == "OK")
	{
		if ($_POST[login] && $_POST[oldpw] && $_POST[newpw])
		{
			$accounts = array();
			if (file_exists("../private/passwd"))
			{
                $accounts = file_get_contents("../private/passwd");
                $accounts = unserialize($accounts);
                foreach ($accounts as $key=>$val)
                {
                    if ($_POST[login] == $key)
                    {
                        if (hash("whirlpool", $_POST[oldpw]) == $val[passwd])
                        {
                            $accounts[$key][passwd] = hash("whirlpool", $_POST[newpw]);
                            $found = 1;
                        }
                    }
                }
                if ($found == 1)
                {
                    file_put_contents("../private/passwd", serialize($accounts));
                    echo "Password updated\n";
                }
			}
            else
            {
                echo "ERROR\n";
                echo "File does not exist\n";
            }
            if ($found == 0)
            {
                echo "ERROR\n";
                echo "Bad password\n";
            }
        }
        else
        {
            echo "ERROR\n";
            echo "Empty fields\n";
        }
	}
	else
	{
		echo "ERROR\n";
        echo "Invalid data passed\n";
    }

?>
