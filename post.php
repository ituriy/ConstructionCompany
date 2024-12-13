<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
  <?php
       if (isset($_POST['name'])&&isset($_POST['email'])&& isset($_POST['text'])){
        
        $name = $_POST['name'];
        $text = $_POST['text'];
        $email =$_POST['email'];
        
        $db_host = "localhost"; 
        $db_user = "root";
        $db_password = ""; 
        $db_base = 'use';
        $db_table = "us"; 
        
        try {
            
            $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
            $db->exec("set names utf8");
            $data = array( 'name' => $name, 'email' => $email, 'text' => $text ); 
            $query = $db->prepare("INSERT INTO $db_table (name, email, text) values (:name, :email, :text)");
            $query->execute($data);
            $result = true;
        } catch (PDOException $e) {
            echo "Ошибка!: " . $e->getMessage() . "<br/>";
        }
         
        if ($result) {
            echo "заявка создана!";
        }
        unset($db);
    }
    ?>
    <a href="index.php" class="btn btn-info">на главную</a>
</body>
</html>
 