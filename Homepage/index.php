<?php 
$page_title = "Startseite";
$active_page = "home";
require_once 'includes/header.php'; 
require_once 'includes/navbar.php';
?>

<main class="container mt-5">

  <!-- Hero-Bereich -->
  <div class="p-5 mb-4 bg-light rounded-3 shadow">
    <div class="container-fluid py-5 text-center">
      <h1 class="display-5 fw-bold">
        <i class="bi bi-gear-fill text-primary"></i> Willkommen bei CPS
      </h1>
      <p class="col-md-10 fs-4 mx-auto">Dies ist Ihre zentrale Projektseite für die Umschulung – gestaltet mit Bootstrap 5.</p>
      <a href="projekte.php" class="btn btn-primary btn-lg mt-3">
        <i class="bi bi-folder2-open"></i> Unsere Projekte
      </a>
    </div>
  </div>

  <!-- Team-Bereich -->
  <section class="my-5">
    <h2 class="text-center mb-4"><i class="bi bi-people-fill"></i> Unser Team</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 text-center shadow">
          <img src="assets/img/team1.jpg" class="card-img-top" alt="Teammitglied 1">
          <div class="card-body">
            <h5 class="card-title">Max Mustermann</h5>
            <p class="card-text">Projektleiter</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center shadow">
          <img src="assets/img/team2.jpg" class="card-img-top" alt="Teammitglied 2">
          <div class="card-body">
            <h5 class="card-title">Erika Musterfrau</h5>
            <p class="card-text">Softwareentwicklerin</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 text-center shadow">
          <img src="assets/img/team3.jpg" class="card-img-top" alt="Teammitglied 3">
          <div class="card-body">
            <h5 class="card-title">Ali Beispiel</h5>
            <p class="card-text">IT-Sicherheit</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once 'includes/footer.php'; ?>
