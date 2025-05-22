<!-- Sichtbarer Footer -->
<footer class="bg-dark text-light pt-4 mt-5">
  <div class="container text-center">
    <div class="mb-3">
      <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
      <a href="#" class="text-light me-3"><i class="bi bi-twitter-x"></i></a>
      <a href="#" class="text-light me-3"><i class="bi bi-linkedin"></i></a>
      <a href="#" class="text-light"><i class="bi bi-envelope-fill"></i></a>
    </div>
    <p class="mb-0">&copy; <?= date('Y') ?> CPS Projekt | Alle Rechte vorbehalten</p>
  </div>
</footer>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="loginForm" method="post" action="login_modal_process.php">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login für Livedaten</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
        </div>
        <div class="modal-body">
          <div id="loginError" class="alert alert-danger d-none"></div>

          <div class="mb-3">
            <label for="modalUsername" class="form-label">Benutzername</label>
            <input type="text" class="form-control" id="modalUsername" name="username" required autofocus />
          </div>
          <div class="mb-3">
            <label for="modalPassword" class="form-label">Passwort</label>
            <input type="password" class="form-control" id="modalPassword" name="password" required />
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Anmelden</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = e.target;
  const data = new FormData(form);
  const errorDiv = document.getElementById('loginError');
  errorDiv.classList.add('d-none');
  errorDiv.textContent = '';

  fetch('login_modal_process.php', {
    method: 'POST',
    body: data
  })
  .then(response => response.json())
  .then(result => {
    if (result.success) {
      // Modal schließen
      var modalElement = document.getElementById('loginModal');
      var modal = bootstrap.Modal.getInstance(modalElement);
      modal.hide();

      // Zur geschützten Seite weiterleiten
      window.location.href = 'livedaten.php';
    } else {
      errorDiv.textContent = result.message || 'Login fehlgeschlagen.';
      errorDiv.classList.remove('d-none');
    }
  })
  .catch(() => {
    errorDiv.textContent = 'Fehler bei der Serververbindung.';
    errorDiv.classList.remove('d-none');
  });
});
</script>

</body>
</html>
