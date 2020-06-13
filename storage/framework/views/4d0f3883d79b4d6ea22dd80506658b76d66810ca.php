<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="with=device-width, user-scalable=no, initial-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cadastro de Usuário</title>
</head>
<body>
<form action="<?php echo e(route('users.sended')); ?>" method="post">

    <label for=""> Nome do usuário: </label>
    <input type="text" name="name">

    <label for=""> E-mail do usuário: </label>
    <input type="email" name="email">


    <input type="submit" value="Enviar  usuário">

</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\learning\learning\resources\views/sendUser.blade.php ENDPATH**/ ?>