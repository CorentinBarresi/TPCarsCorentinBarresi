<?php

(empty($_POST) ||
  empty($_POST['namecar']) ||
  empty($_POST['year']) ||
  empty($_POST['kilometer']) ||

require_once 'functions/cars.php';
$title = "form";
require_once 'views/layout/header.php';

?>
<div class="container mt-4">
  <?php if (insertForm($_POST['namecar'], $_POST['year'], $_POST['kilometer'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Merci, votre demande a bien été enregistrée
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de l'enregistrement de votre demande
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'views/layout/footer.php'; ?>