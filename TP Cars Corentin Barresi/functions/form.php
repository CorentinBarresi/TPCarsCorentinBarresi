<?php

require_once __DIR__ . '/db.php';

function insertForm(
  string $namecar,
  string $year,
  string $kilometer,
) {
  $pdo = getPdo();

  $query = "INSERT INTO contact (namecar, year, kilometer, message) VALUES (:namecar, :year, :kilometer)";

  $stmt = $pdo->prepare($query);

  // On retourne le résultat d'execute car en cas de succès elle retourne TRUE, sinon en cas d'échec elle retourne FALSE
  return $stmt->execute([
    'namecar' => $namecar,
    'year' => $year,
    'kilometer' => $kilometer,
  ]);
}
