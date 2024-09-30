<?php

class Database
{
	private string $host;
	private string $user;
	private string $pass;
	private string $dbName;

	// will construct a way to reference current value being passed
	// when "Database" is constructed
	public function __construct(string $host, string $user, string $pass, string $dbName)
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbName = $dbName;
	}

	public function ConnectDatabase(): mysqli 
	{
		return new mysqli($this->host, $this->user, $this->pass, $this->dbName);
	}

	public function getHost(): string { return $this->host; }
	public function getUser(): string { return $this->user; }
	public function getPass(): string { return $this->pass; }
}

?>
