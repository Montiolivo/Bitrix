<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="with=device-width, user-scalable=no, initial-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Editar Usuário</title>
</head>
<body>
<form action="<?php echo e(route('users.edit', ['user' => $user->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for=""> Nome do usuário: </label>
    <input type="text" name="name" value="<?php echo e($user->name); ?>">

    <label for=""> E-mail do usuário: </label>
    <input type="email" name="email" value="<?php echo e($user->email); ?>">

    <label for=""> Senha do usuário: </label>
    <input type="password" name="password" value="">


    <input type="submit" value="Editar usuário">

</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\learning\learning\resources\views/editUser.blade.php ENDPATH**/ ?>