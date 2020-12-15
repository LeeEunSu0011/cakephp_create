<?php
/**
 * 
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[] $users
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>
</head>
<body>
    <h2></h2>
    <?php foreach($users as $user): ?>
        ユーザー番号：<?= $user->id ?><br>
        ユーザー名：<?= $user->username ?><br>
        <br>
    <?php endforeach; ?>
</body>
</html>