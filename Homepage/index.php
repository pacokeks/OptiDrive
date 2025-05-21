<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="hero-section text-white d-flex align-items-center">
    <div class="container text-center">
        <h1 class="display-4">Willkommen beim Picar-X Projekt</h1>
        <p class="lead mt-3">Autonomes Fahren. Sensorik. Echtzeit-Datenanalyse.</p>
        <a href="dashboard.php" class="btn btn-primary btn-lg mt-4">Zum Dashboard</a>
    </div>
</section>

<section class="features-section py-5 bg-dark text-light" id="features">
    <div class="container">
        <h2 class="text-center mb-5">Funktionen</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="bi bi-cpu fs-1 mb-3"></i>
                <h5>KI-gestützte Navigation</h5>
                <p>Intelligente Pfadfindung basierend auf Sensorfusion.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="bi bi-battery-charging fs-1 mb-3"></i>
                <h5>Live-Batteriestatus</h5>
                <p>Echtzeitüberwachung des Energieverbrauchs.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="bi bi-graph-up-arrow fs-1 mb-3"></i>
                <h5>Datenvisualisierung</h5>
                <p>Übersichtliche Darstellung von Sensorwerten und Statistiken.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
