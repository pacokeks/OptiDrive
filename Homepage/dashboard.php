<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
include 'includes/header.php';
include 'includes/navbar.php';
?>

<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2>Dashboard</h2>
        <p class="mb-5">Live-Daten & Systemübersicht</p>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Batteriestatus</h5>
                        <p class="card-text">Spannung: 7.4V<br>Ladung: 85%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Sensordaten</h5>
                        <p class="card-text">Ultraschall: 0.45m<br>IR: Aktiv</p>
                    </div>
                </div>
            </div>
        </div>

        <a href="logout.php" class="btn btn-outline-light mt-4">Logout</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
