<?php

require_once "Models/DatabaseModel.php";
require_once "Views/DatabaseView.php";
require_once "Controllers/DatabaseController.php";

$db_conn = new Database("localhost", "root", "ghostlyTr1nk37", "teste_db");
$db_view = new DatabaseView();
$db = new DatabaseController($db_conn, $db_view);

echo $db->getUser();

?>
