<?php
require_once('includes/header.php');
require_once('includes/navbar.php');
?>

<main class="container mt-5">
  <h1>Kontakt</h1>
  <p>Du möchtest uns erreichen? Dann nutze gerne das folgende Formular:</p>

  <form action="kontakt_send.php" method="post" class="mt-4">
    <div class="mb-3">
      <label for="name" class="form-label">Name *</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-Mail *</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Nachricht *</label>
      <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Absenden</button>
  </form>
  
  <div class="mt-3">
    <a href="index.php" class="btn btn-outline-secondary">Zurück zur Startseite</a>
  </div>
</main>

<?php
require_once('includes/footer.php');
?>
