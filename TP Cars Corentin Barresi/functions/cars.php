<?php
require_once __DIR__ . "/db.php";

function getCars(): array
{
  $pdo = getPdo();

  $stmt = $pdo->query("SELECT * FROM product WHERE visible=1");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
