<?php
require_once('includes/header.php');
require_once('includes/navbar.php');
?>

<main class="container mt-5">
  <h1 class="text-center mb-4">Über das CPS-Projekt</h1>

  <div class="row mb-5">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title"> <i class="bi bi-cpu me-2 text-primary"></i>Was ist CPS?</h5>
          <p class="card-text">
            CPS steht für <strong>Cyber-Physical Systems</strong>. Es geht um die Verbindung von realer und digitaler Welt.
            In unserem Projekt entwickeln wir eine moderne Webanwendung mit HTML, CSS, PHP, JavaScript und Bootstrap.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-flag me-2 text-success"></i>Ziele des Projekts</h5>
          <p class="card-text">
            Ziel ist es, ein vollständiges Websystem aufzubauen – inklusive Benutzerführung, Formularen, Navigation und Design.
            Dabei lernen wir Teamarbeit, Versionskontrolle, Strukturierung von Dateien und moderne Webstandards.
          </p>
        </div>
      </div>
    </div>
  </div>

  <h2 class="text-center mb-4">Unser Team</h2>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="card text-center shadow">
        <div class="card-body">
          <img src="assets/img/team1.jpg" class="rounded-circle mb-3" width="100" height="100" alt="Teammitglied 1">
          <h5 class="card-title">Max Mustermann</h5>
          <p class="card-text"> <i class="bi bi-palette-fill me-1 text-info"></i>Frontend-Entwicklung & Design</p>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center shadow">
        <div class="card-body">
          <img src="assets/img/team2.jpg" class="rounded-circle mb-3" width="100" height="100" alt="Teammitglied 2">
          <h5 class="card-title">Erika Beispiel</h5>
          <p class="card-text">PHP & Backend-Logik</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-center shadow">
        <div class="card-body">
          <img src="assets/img/team3.jpg" class="rounded-circle mb-3" width="100" height="100" alt="Teammitglied 3">
          <h5 class="card-title">Ali Azubi</h5>
          <p class="card-text">Dokumentation & Projektleitung</p>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="index.php" class="btn btn-outline-primary">Zurück zur Startseite</a>
  </div>
</main>

<?php
require_once('includes/footer.php');
?>
