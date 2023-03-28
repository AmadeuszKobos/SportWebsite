<?php
session_start();

// połączenie z bazą danych
$conn = new mysqli('localhost', 'root','','techinf');

// sprawdzanie połączenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// pobranie danych użytkownika
$username = $_SESSION['login'];

// usunięcie konta z bazy danych
$query = "DELETE FROM dane_kontaktowe WHERE dane_kontaktowe.ID_kontaktowe = (SELECT ID_kontaktowe FROM dane_osobowe WHERE ID_dane = (SELECT ID_dane FROM user WHERE login = '$username'));";
mysqli_query($conn, $query);

$query = "DELETE FROM dane_osobowe WHERE ID_dane = (SELECT ID_dane FROM user WHERE login = '$username');";
mysqli_query($conn, $query);

$query = "DELETE FROM user WHERE login = '$username'";
mysqli_query($conn, $query);

// zamknięcie połączenia z bazą danych
mysqli_close($conn);

// usunięcie danych sesji
session_unset();
session_destroy();

// przekierowanie na stronę logowania
header("location: page3.html");
exit;
?>

