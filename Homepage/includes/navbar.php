<?php
// Session ist in header.php bereits gestartet
$page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">
      <i class="bi bi-cpu me-1"></i> CPS Projekt
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Navigation umschalten">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= $page === 'about.php' ? 'active fw-bold' : '' ?>" href="about.php">
            <i class="bi bi-info-circle"></i> Über uns
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page === 'projekte.php' ? 'active fw-bold' : '' ?>" href="projekte.php">
            <i class="bi bi-kanban"></i> Projekte
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page === 'kontakt.php' ? 'active fw-bold' : '' ?>" href="kontakt.php">
            <i class="bi bi-envelope"></i> Kontakt
          </a>
        </li>

        <?php if (isset($_SESSION['user'])): ?>
          <li class="nav-item">
            <a class="nav-link <?= $page === 'livedaten.php' ? 'active fw-bold' : '' ?>" href="livedaten.php">
              <i class="bi bi-bar-chart-line"></i> Livedaten
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="logout.php">
              <i class="bi bi-box-arrow-right"></i> Logout (<?= htmlspecialchars($_SESSION['user']) ?>)
            </a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
              <i class="bi bi-shield-lock"></i> Livedaten
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
