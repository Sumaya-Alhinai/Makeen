<?php
require 'db/db_Connection.php';

$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM todos WHERE id = $id");

header('Location: index.php');
