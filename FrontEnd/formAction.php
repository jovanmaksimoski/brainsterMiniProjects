<?php
require_once (__DIR__ . '/../Database/Connection.php');
require_once(__DIR__ . '/../Users/Users.php');

use Users\Users;
use Database\Connection as Connection;

$user = new Users($_POST);
$database = new Connection();


$user->store();

$connection = $database->getConnection();
$data = $connection->prepare("SELECT ID FROM users ORDER BY ID DESC LIMIT 1");

$data->execute();

$ID = $data->fetch(PDO::FETCH_ASSOC);

header("Location: ./pageThree.php?ID={$ID['ID']}");

