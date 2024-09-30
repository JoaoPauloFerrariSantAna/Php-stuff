<?php

class DatabaseView
{
	public function ShowDatabaseConfigurationInfo(string $host, string $pass, string $user): void
	{
		echo "HOST is $host<br/>";
		echo "USER is $user<br/>";
		echo "PASS is $pass<br/>";
	}
}

?>
