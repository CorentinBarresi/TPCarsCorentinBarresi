<?php
$title = "cars";
require_once 'views/layout/header.php';
require_once 'functions/cars.php';

$cars = getCars();
?>

<div class="container mt-4">
  <div class="row">
    <?php
    foreach ($cars as $cars) {
      require 'views/cars/item.php';
    }
    ?>
  </div>
</div>

<?php require_once 'views/layout/footer.php'; ?>