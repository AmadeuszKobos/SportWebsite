<?php
  session_start();

?>


<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Użytkownik</title>
  <link rel="stylesheet" href="style3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

  <header>
    <img id="headimg1" src="Pictures/ball.png" alt="obraz">
    <h1>#👩‍💻Konto uzytkownika👨‍💻#</h1>
    <img id="headimg2" src="Pictures/ball.png" alt="obraz">
  </header>

  <nav id="navmob">
    <a><div>
        <img class="menumob" src="Pictures/menu.svg" alt="image" onclick="showList()">
    </div></a>
    <div id="hide">
        <a href="index.html">Start</a>
        <a href="page1.html">Reprezentacja Polski</a>
        <a href="page2.html">Piłka klubowa</a>
        <a href="page3.html">Twoje konto</a>
        <a href="page4.html">Skontaktuj się z nami</a>
    </div>
</nav>

  <nav id="nawigacja" class="menu">
    <a href="index.html">Start</a>
    <a href="page1.html">Reprezentacja Polski</a>
    <a href="page2.html">Piłka klubowa</a>
    <div class="dropdown">
      <a href="page3.php">Twoje konto</a>
      <ul>
        <li><a href="page3.php">Zaloguj się</a></li>
        <li><a href="page3.php#email">Zarejestruj się</a></li>
        <li><a href="page3.php">Odzyskaj konto</a></li>
      </ul>
    </div>
    <a href="page4.html">Skontaktuj się z nami</a>
  </nav>



  <section id="log-reg-page">
    <form name="login" action="login.php" method="post">
        <img src="Pictures/Avatar.png" alt="Avatar" class="avatar">

      <div class="login" >
        <h2>Zaloguj się</h2>
        <label for="logLog"><b>Login</b></label>
        <input type="text" id="logLog" placeholder="Podaj Login" name="logLog" required>

        <label for="passLog"><b>Hasło</b></label>
        <input type="password" id="passLog" placeholder="Podaj hasło" name="passLog" required>

        <button type="submit" class="registerbtn">Zaloguj się</button>
        <label class="chkbx">
          <input type="checkbox" id="show" name="show"> Pokaż hasło
        </label>

      </div>


    </form>
    <div class="login case">
      <p class="psw">Zapomniałeś hasła?<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Odzyskaj je</a></p>
      <p class="psw">Nie masz konta?<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Utwórz je</a></p>
    </div>



    <form action="connect.php" method="post" enctype="multipart/form-data"> 
      <div class="register">
        <h2>Zarejestruj się</h2>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" id="email" placeholder="Podaj Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          title="Nieprawidłowy adres email" name="email" required>

        <label for="login"><b>Login</b></label>
        <input type="text" id="login" placeholder="Podaj nazwe użytkownika" name="login" required>

        <label for="u_name"><b>Imie</b></label>
        <input type="text" id="u_name" placeholder="Podaj imie" name="u_name" required>

        <label for="u_surname"><b>Nazwisko</b></label>
        <input type="text" id="u_surname" placeholder="Podaj nazwisko" name="u_surname" required>

        <label for="image">Profilowe:</label>
        <input type="file" id="some_image" name="some_image">

        <label for="birthday"><b>Data urodzenia</b></label>
        <input type="date" id="birthday" placeholder="Podaj nazwe użytkownika" name="birthday" required>

        <label for="phone_number"><b>Numer telefonu</b></label>
        <input type="tel" id="phone_number" placeholder="9 cyfr ciągiem" name="phone_number" pattern="[0-9]{9}" title="Format 000000000">
        
        <label for="gender"><b>Chce zostać redaktorem</b></label>
        <select id="gender" name="gender">
          <option value="0">Nie</option>
          <option value="1">Tak</option>
        </select>

        <label for="password"><b>Hasło</b></label>
        <input type="password" id="password" placeholder="Wprowadź hasło" pattern=".{8,}"
          title="Hasło musi składać się z min. 8 znaków" name="password" required>

        <label for="passrep"><b>Powtórz hasło</b></label>
        <input type="password" id="passrep" placeholder="Powtórz hasło" name="psw-repeat" required>
        <button type="submit" class="registerbtn">Zarejestruj się</button>
        <hr>

      </div>

    </form>

    
  </section>

  <h2 id='logged_info1' class="ukryj">Jesteś już zalogowany jako: <em><?php echo $_SESSION['login']?></em></h2>
  <a href="userpanel.php" id="return_button" class="ukryj">Wróć do panelu użytkownia</a>
  </br></br></br>
  <a class="ukryj" href="logout.php" id="logout_button">Wyloguj się</a>

  

  <footer>
    <button id="light-color">* <b>Light-mode</b> *</button>
    <button id="dark-color">* <b>Dark-mode</b> *</button>
    <button id="scroll-top">⬆</button>
    <a href="www.facebook.com" target="_blank"><img src="Pictures/fb.png" alt="img"></a>
    <a href="https://www.instagram.com/move.federation/" target="_blank"><img src="Pictures/ig.png" alt="img"></a>
    <a href="https://twitter.com/search?q=%23Quatar2022&src=typeahead_click" target="_blank"><img src="Pictures/twt.png"
        alt="img"></a>
  </footer>

  <script src="JS/kolory.js"></script>
  <script src="JS/scroll.js"></script>
  <script src="JS/pokaz_haslo.js"></script>
  <script src="JS/register.js"></script>
  <script src="JS/burgir.js"></script>
  <script src="thankyou.js"></script>
  <script> 
    var logon = <?php if(isset($_SESSION['login'])){echo '1';}else{echo '0';}?>;
    console.log(logon);
    if(logon == 1){
      document.getElementById("log-reg-page").classList.add('ukryj');
      document.getElementById('logged_info1').classList.remove('ukryj');
      document.getElementById('logged_info2').classList.remove('ukryj');
    }else{
      document.getElementById('log-reg-page').classList.remove('ukryj');
      document.getElementById('logged_info1').classList.add('ukryj');
      document.getElementById('logout_button').classList.add('ukryj');
    }
  </script>
</body>

</html>