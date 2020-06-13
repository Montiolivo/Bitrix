<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="with=device-width, user-scalable=no, initial-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Detalhes Usuários</title>
</head>
<body>
    <h1><?php echo e($user->name); ?></h1>
    <p><?php echo e($user->email); ?></p>
    <p><?php echo e(date('d/m/y H:i', strtotime($user->created_at))); ?></p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\learning\learning\resources\views/listUser.blade.php ENDPATH**/ ?>