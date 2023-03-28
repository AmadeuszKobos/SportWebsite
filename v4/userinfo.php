<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php 
            $_SESSION['Zdjecie'] = $user['Image'];
            $file_content = $_SESSION['Zdjecie'];
            echo '<img src="data:image/jpeg;base64,'.base64_encode($file_content).'" style="display: block; border-radius: 50px; max-height: 400px; margin-left: auto; margin-right: auto"/>';

        ?>
</br>
<table id="user_table">
    <tr>
        <th>Login</th>
        <td><?php echo $user['Login']; ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $user['Password']; ?></td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td><?php echo $user['email']; ?></td>
    </tr>
    <tr>
        <th>Data urodzenia</th>
        <td><?php echo $user['Data_urodzenia']; ?></td>
    </tr>
    <tr>
        <th>Imie</th>
        <td><?php echo $user['Imie']; ?></td>
    </tr>
    <tr>
        <th>Nazwisko</th>
        <td><?php echo $user['Nazwisko']; ?></td>
    </tr>
    <tr>
        <th>Czy chce zostać redaktorem</th>
        <td><?php echo $user['Mozliwy_redaktor']; ?></td>
    </tr>
    <tr>
        <th>Numer telefonu</th>
        <td><?php echo $user['telefon']; ?></td>
    </tr>    
<table>



</body>
</html>





