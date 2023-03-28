<?php
session_start();

class FileManager {
    
    public $filePath;
    
    public function __construct() {
        $this->filePath = '';
    }
    
    public function readFile() {
        //   return file_get_contents($this->filePath);
        echo "<b>Edytujesz: ".$this->filePath."<b>";
        return file_get_contents($this->filePath);
    }
    
    public function editFile($Content) { 
        file_put_contents($this->filePath, $Content);
    }
    
    public function saveFile() {
        if(isset($_POST['save_file'])) {
            $newContent = $_POST['content'];
            $this->editFile($newContent);
            
            return 'Plik został zapisany';
        }
    }
    
}

  $fileManager = new FileManager();
  

  if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  
    if ($fileExtension != "txt") {
      echo "<div style='color: red; text-align: center; font-size: 20px'>Tylko pliki .txt są dozwolone.</div>";
    } else {
        if(isset($_POST['open_file'])) {
            $fp = $_FILES['file']['name'];
            $_SESSION['content'] = $fp;
          $fileManager->filePath = "$fp";
          $fileContent = $fileManager->readFile();
          }
    }
  }



  

    
    if(isset($_POST['save_file'])) {
        $fileManager->filePath = $_SESSION['content'];
        $message = $fileManager->saveFile();
        $fileContent = $fileManager->readFile();
    }
    



// session_start();
// // $username = $_SESSION["login"];
// // $conn = new mysqli('localhost', 'root','','techinf');
// // $query = "SELECT Image FROM user WHERE Login = '$username'";
// // $result = mysqli_query($conn, $query);
// // $row = mysqli_fetch_assoc($result);
// // $blob = $row['Image'];
// // file_put_contents("nazwa_pliku.jpg", $blob);

// if(isset($_POST['read'])) {
//     $fileHandler = new FileHandler("nazwa_pliku.jpg");
//     $fileHandler->readFile();   
// }

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
<div>
<form action="" method="post" enctype="multipart/form-data">
</div>

    <div>
        <?php if(!$fileManager->filePath): ?>
            <input type="file" name="file" class="buttons_php" style="width: 300px">
            <input type="submit" name="open_file" value="Wgraj plik" class="buttons_php">
        <?php else: ?>
            <textarea name="content" style="height: 400px"><?php echo $fileContent?></textarea>
            <input class="buttons_php" type="submit" name="save_file" value="Zapisz plik" class="buttons_php">
            </br>
            <a href="edycja.php" class="buttons_php">Edytuj kolejny</a>
            </br>
            <a href="page3.php" id="return_button">Wróć do przeglądania</a>
        <?php endif; ?>
    </div>

<?php 
if(isset($message)) echo $message; 
?>


</form>



</body>
</html>