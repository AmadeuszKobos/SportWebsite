<?php
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dob = date('Y-m-d', strtotime($_POST['birthday']));
    $name = $_POST['u_name'];
    $surname = $_POST['u_surname'];
    $gender = $_POST['gender'];
    $phone_number = $_POST['phone_number'];

    $data = array(  
        'login' => $login,
        'password' => $password,
        'email' => $email,
        'dob' => $dob,
        'name' => $name,
        'surname' => $surname,
        'gender' => $gender,
        'phone_number' => $phone_number,

    );

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $image = $_FILES['some_image'];

    if ($image['error'] == 0) {
        $image_data = file_get_contents($image['tmp_name']);
    }

    $conn = new mysqli('localhost', 'root','','techinf');

    $login_exist = "SELECT Login FROM user WHERE Login = '$login'";
    $le = mysqli_query($conn, $login_exist); 

    $email_exist = "SELECT Email FROM dane_kontaktowe WHERE Email = '$email'";
    $ee = mysqli_query($conn, $email_exist); 

    if($conn -> connect_error){
        die('Połączenie z bazą danych się nie powiodło ' .$conn->connect_error);
    }else if(mysqli_num_rows($le) > 0){
        echo "Login jest zajęty</br>";
    }else if(mysqli_num_rows($ee) > 0){
        echo "Email jest zajęty</br>";
    }else{
        $stmt = $conn -> prepare("insert into dane_kontaktowe (email, telefon) values (?, ?)");
        $stmt->bind_param("si", $email, $phone_number);
        $stmt -> execute();
        
        $kontaktowe_id = $conn->insert_id;
        
        $stmt = $conn -> prepare("insert into dane_osobowe (Imie, Nazwisko, Data_urodzenia, ID_kontaktowe) values (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $surname, $dob, $kontaktowe_id);
        $stmt -> execute();
        
        $osobowe_id = $conn->insert_id;

        $stmt = $conn -> prepare("insert into user (Login, Password, Image, Mozliwy_redaktor, ID_dane) values (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssii", $login, $password_hash, $image_data, $gender, $osobowe_id);
        echo $osobowe_id;
        $stmt -> execute();
        
        echo "Rejestracja przebiegła pomyślnie</br>";
        $conn -> close();
    };
    
    echo "Nazwa pliku: " . $_FILES['some_image']['name'] . "</br>";
    echo "Typ pliku: " . $_FILES['some_image']['type'] . "</br>";
    echo "Rozmiar pliku: " . $_FILES['some_image']['size'] . " bajtów </br>";
    echo "Tymczasowa ścieżka: " . $_FILES['some_image']['tmp_name'] . "</br></br>";
    
    include 'form_data.php';

    ?>


