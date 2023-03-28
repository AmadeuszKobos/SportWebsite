<table>
    <tr>
        <th>Login</th>
        <td><?php echo $data['login']; ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $data['password']; ?></td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td><?php echo $data['email']; ?></td>
    </tr>
    <tr>
        <th>Data urodzenia</th>
        <td><?php echo $data['dob']; ?></td>
    </tr>
    <tr>
        <th>Imie</th>
        <td><?php echo $data['name']; ?></td>
    </tr>
    <tr>
        <th>Nazwisko</th>
        <td><?php echo $data['surname']; ?></td>
    </tr>
    <tr>
        <th>Czy chce zostać redaktorem</th>
        <td><?php echo $data['gender']; ?></td>
    </tr>
    <tr>
        <th>Numer telefonu</th>
        <td><?php echo $data['phone_number']; ?></td>
    </tr>


<table>





<img src="<?php echo $_FILES['some_image']['tmp_name']; ?>" alt="Plik">

</br>

<button><a href="/v2/page3.html">Wróć do panelu rejestracji</a></button>

