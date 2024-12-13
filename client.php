<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>users</title>
</head>
 
<body>
    <div class="container">
        <div class="row">
            <h2>клиенты</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>имя</th>
                        <th>адрес</th>
                        <th>сообщение</th>
                    </tr>
                </thead>
 
                <tbody>
                    <?php
                        include_once('config.php');
                        $stmt = $connection->prepare(
                                "SELECT * FROM us");
                        $stmt->execute();
                        $users = $stmt->fetchAll();
                        foreach($users as $user)
                        {
                    ?>
                            <tr>
                                <td>
                                    <?php echo $user['id']; ?>
                                </td>
                                <td>
                                    <?php echo $user['name']; ?>
                                </td>
                                <td>
                                    <?php echo $user['email']; ?>
                                </td>
                                <td>
                                    <?php echo $user['text']; ?>
                                </td>
                                <?php
                                    echo "<td><form action='clear.php' method='post'>
                                                <input type='hidden' name='id' value='" . $user['id'] . "' />
                                                <input class='btn btn-info' type='submit' value='Удалить'>
                                            </form></td>";
                                ?>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-info">на главную</a>
        </div>
    </div>
</body>
 
</html>