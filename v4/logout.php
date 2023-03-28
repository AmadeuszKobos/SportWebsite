<?php
session_start();

// usunięcie danych sesji
session_unset();
session_destroy();

// przekierowanie na stronę logowania
header("location: page3.php");
exit;
?>