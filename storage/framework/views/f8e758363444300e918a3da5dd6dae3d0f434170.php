<!doctype html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="with=device-width, user-scalable=no, initial-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Listagem de Usuários</title>
</head>
<body>
<table>
    <tr>
            <td>#ID</td>
            <td>Nome:</td>
            <td>E-mail:</td>
            <td>Ações</td>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                    <a href="">Ver Usuário</a>
                    <form action="<?php echo e(route('users.destroy', ['user' => $user->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="hidden" name="user" value="<?php echo e($user->id); ?>">
                        <input type="submit" value="Remover">
                    </form>

                </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\learning\learning\resources\views/listAllUsers.blade.php ENDPATH**/ ?>