<?php
if(isset($_POST["id"]))
{
    
        include_once('config.php');
        $stmt = $connection->prepare("DELETE FROM us WHERE id = :userid");
        $stmt->bindValue(":userid", $_POST["id"]);
        $stmt->execute();
        header("Location: client.php");
   
}
?>