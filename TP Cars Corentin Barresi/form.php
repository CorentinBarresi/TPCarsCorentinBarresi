<?php
$title = "Form";
require_once 'views/layout/header.php';
?>

<!-- CONTENU -->
<div class="container mt-4">
  <h1>Contactez-nous</h1>
  <form action="contact_process.php" method="POST">
    <div class="form-group">
      <label for="namecar">Nom</label>
      <input type="text" class="form-control" id="nom" name="namecar" aria-describedby="namecarHelp">
      <small id="namecarHelp" class="form-text text-muted">Entrez le nom de la voiture</small>
    </div>
    <div class="form-group">
      <label for="year">année de la voiture</label>
      <input type="text" class="form-control" id="year" name="year" aria-describedby="yearHelp">
      <small id="yearHelp" class="form-text text-muted">Entrez l'année de la voiture</small>
    </div>
    <div class="form-group">
      <label for="kilometer">Kilometrage</label>
      <input type="kilometer" class="form-control" id="kilometer" name="kilometer" aria-describedby="kilometerHelp">
      <small id="kilometerHelp" class="form-text text-muted">Enter le kilometrage de votre voiture</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>