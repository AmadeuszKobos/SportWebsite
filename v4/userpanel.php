<?php
session_start();
$username = $_SESSION['login'];

// połączenie z bazą danych
$conn = new mysqli('localhost', 'root','','techinf');

// sprawdzanie połączenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Witaj <?php echo $username?></title>
</head>
<body>
<h1> Witaj <?php echo $username?> !!!</h1>

<?php


$stmt = $conn->prepare(
"SELECT Image, Login, Mozliwy_redaktor, Password, dane_osobowe.Imie AS Imie, dane_osobowe.Nazwisko AS Nazwisko, dane_osobowe.Data_urodzenia AS Data_urodzenia, dane_kontaktowe.email AS email, dane_kontaktowe.telefon AS telefon 
FROM user
JOIN dane_osobowe ON (dane_osobowe.ID_dane = user.ID_dane)
JOIN dane_kontaktowe ON (dane_kontaktowe.ID_kontaktowe = dane_osobowe.ID_kontaktowe)
WHERE Login = '$username';"
);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if(mysqli_num_rows($result) == 1) {
    include 'userinfo.php';
}else{
    echo "Błąd przy odczycie danych użytkownika";
}


?>

<a href="page3.php" id="return_button">Wróć do przeglądania</a>
</br></br></br>
<a href="logout.php" id="logout_button">Wyloguj się</a>
</br></br></br>
<a href="delete_acc.php" id="delete_button">USUŃ KONTO</a>
</br></br></br>
<a href="edycja.php" id="edit_button">Edytuj plik na koncie</a>
</body>
</html>

