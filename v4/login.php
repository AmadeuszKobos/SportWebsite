<?php
// połączenie z bazą danych
$conn = new mysqli('localhost', 'root','','techinf');

// sprawdzanie połączenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['logLog']) && isset($_POST['passLog'])) {
  $logLog = $_POST['logLog'];
  $passLog = $_POST['passLog'];

  $stmt = $conn->prepare("SELECT password FROM user WHERE login = ?");
  $stmt->bind_param("s", $logLog);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();

  // Sprawdzenie czy podany login i hasło zgadzają się z tymi zapisanymi w bazie danych
  $query = "SELECT * FROM user WHERE login='$logLog'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 1) {
    // Jeśli tak, to przypisz dane użytkownika do sesji i przekieruj do panelu użytkownika
    if(password_verify($passLog, $user['password']))
    {
    session_start();
    $user = mysqli_fetch_assoc($result);
    $_SESSION['login'] = $logLog;
    header("Location: userpanel.php");
    }else
    {
        echo 'Niepoprawne hasło spróbuj ponownie';
    }
} else {
    // Jeśli nie, to wyświetl komunikat o błędnym loginie lub hasle
    echo "<h1>!!!Błędny login lub hasło.!!!</h1>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style3.css">
  <title>Document</title>
</head>
<body>
  <form method="post" action="login.php">
    <label for="logLog"><b>Login</b></label>
    <input type="text" id="logLog" placeholder="Podaj Login" name="logLog" required>
  <label for="passLog"><b>Hasło</b></label>
  <input type="password" id="passLog" placeholder="Podaj hasło" name="passLog" required>

  <button type="submit" class="registerbtn">Zaloguj się</button>
  <label class="chkbx">
  <input type="checkbox" id="show" name="show"> Pokaż hasło
  </label>

</form>  
<a href="page3.php" id="return_button">Wróć do przeglądania</a>
</body>
</html>

