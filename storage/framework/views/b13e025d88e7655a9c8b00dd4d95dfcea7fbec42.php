<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="with=device-width, user-scalable=no, initial-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Listagem de Contatos</title>
</head>
<body>
<table>
    <tr>
        <td>Nome Contato: </td>

    </tr>

    <?php $__currentLoopData = $contact->result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($contact->NAME); ?></td>




            <td>
                <form action="<?php echo e(route('br.formEditContact', ['contact' => $contact->ID])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="contact" value="<?php echo e($contact->ID); ?>">
                    <input type="submit" value="Editar">
                </form>
                <form action="<?php echo e(route('br.delete', ['contact' => $contact->ID])); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="contact" value="<?php echo e($contact->ID); ?>">
                    <input type="submit" value="Remover">
                </form>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\learning\learning\resources\views/listContacts.blade.php ENDPATH**/ ?>