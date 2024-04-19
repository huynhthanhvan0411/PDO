<?php
require_once 'Controllers/UserController.php';

$controller = new UserController();
$users = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>

<body>
    <h2>Welcome</h2>

    <table style="width:100%; border: 1px solid black">
        <tr>
            <th>STT</th>
            <th>USER NAME</th>
        </tr>
        <?php foreach ($users as $key => $user) : ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $user['username']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>