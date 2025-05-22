<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

require_once('includes/header.php');
require_once('includes/navbar.php');
?>

<main class="container mt-5">
  <h1 class="mb-4">Livedaten</h1>
  <p class="text-muted">Geschützte Live-Daten nur für angemeldete Benutzer.</p>

  <!-- Temperaturanzeige -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <h5 class="card-title"><i class="bi bi-thermometer-half"></i> Temperatur Sensor</h5>
      <p class="card-text fs-4">24,5 °C</p>
    </div>
  </div>

  <!-- Live-Video vom PiCar -->
  <div class="card shadow-sm mb-4">
    <div class="card-body text-center">
      <h5 class="card-title"><i class="bi bi-camera-video"></i> Live-Übertragung vom PiCar</h5>
      <img src="http://<DEIN-RASPBERRYPI-IP>:8080/?action=stream" 
           class="img-fluid rounded border mt-3" 
           alt="Live Video vom PiCar" 
           style="max-height: 400px;">
      <p class="mt-2 text-muted">Wenn kein Bild erscheint, ist der Stream möglicherweise offline.</p>
    </div>
  </div>

  <!-- Logout Button -->
  <div class="text-end">
    <a href="logout.php" class="btn btn-outline-danger">
      <i class="bi bi-box-arrow-right"></i> Logout
    </a>
  </div>
</main>

<?php
require_once('includes/footer.php');
?>
