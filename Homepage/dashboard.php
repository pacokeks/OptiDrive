<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section class="py-5 bg-secondary text-white">
    <div class="container text-center">
        <h2>Dashboard</h2>
        <p class="mb-5">Live-Daten & Systemübersicht</p>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h5 class="card-title">Batteriestatus</h5>
                        <p>Spannung: 7.4V<br>Ladung: 85%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h5 class="card-title">Sensordaten</h5>
                        <p>Ultraschall: 0.45m<br>IR: Aktiv</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php" class="btn btn-outline-light mt-4">Zurück</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
