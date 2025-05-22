<?php
require_once('includes/header.php');
require_once('includes/navbar.php');
?>

<main class="container mt-5">
  <h1>Unsere Projekte</h1>
  <p>Hier findest du eine Übersicht unserer bisherigen und aktuellen Projekte im Rahmen der CPS-Umschulung.</p>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="assets/img/projekt1.jpg" class="card-img-top" alt="Projekt 1">
        <div class="card-body">
          <h5 class="card-title">Projekt 1: Webshop</h5>
          <p class="card-text">Ein kleiner Online-Shop mit Warenkorb und Bestellformular.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="assets/img/projekt2.jpg" class="card-img-top" alt="Projekt 2">
        <div class="card-body">
          <h5 class="card-title">Projekt 2: To-Do App</h5>
          <p class="card-text">Eine Aufgabenverwaltung mit Datenbank und Benutzer-Login.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="assets/img/projekt3.jpg" class="card-img-top" alt="Projekt 3">
        <div class="card-body">
          <h5 class="card-title">Projekt 3: Portfolio Website</h5>
          <p class="card-text">Eine persönliche Website zur Präsentation von Fähigkeiten und Projekten.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="index.php" class="btn btn-outline-primary">Zurück zur Startseite</a>
  </div>
</main>

<?php
require_once('includes/footer.php');
?>
