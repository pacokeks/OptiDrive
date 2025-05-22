<?php
session_start();
session_destroy();
header('Location: index.php');  // <-- Hier wird hin weitergeleitet
exit;
