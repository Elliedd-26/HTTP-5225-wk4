<?php
require "db.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("DELETE FROM schools WHERE id = :id");
$stmt->execute([":id" => $id]);

header("Location: index.php");
exit;
