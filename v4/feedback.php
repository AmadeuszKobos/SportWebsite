<?php
  if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $message = $_POST['subject'];

    

    $conn = new mysqli('localhost', 'root','','techinf');

    $query = "INSERT INTO feedback (Imie, Nazwisko, Kraj, Wiadomosc) VALUES ('$firstname', '$lastname', '$country', '$message')";

    if(mysqli_query($conn, $query)) {
      echo "Dane zostały wysłane do bazy danych.";
    } else {
      echo "Błąd: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: page4.html");
  }
?>