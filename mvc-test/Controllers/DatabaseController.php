<?php

class DatabaseController
{
	// references "Database" class
	private Database $model;
	private DatabaseView $view;

	// will reference "Database" "class" with passed params
	public function __construct(Database $model, DatabaseView $view)
	{
		$this->model = $model;
		$this->view = $view;
	}

	public function ConnectDatabase(): mysqli 
	{
		return $this->model->ConnectDatabase();
	}

	public function ShowDatabaseConfiguration(): void
	{
		$this->view->ShowDatabaseConfigurationInfo(
			$this->model->getHost(),
			$this->model->getUser(),
			$this->model->getPass()
		);
	}

	public function getHost(): string { return $this->model->getHost(); }
	public function getUser(): string { return $this->model->getUser(); }
	public function getPass(): string { return $this->model->getPass(); }
}

?>
