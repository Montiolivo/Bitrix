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
<form action="<?php echo e(route('users.send')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label for=""> Nome : </label>
    <input type="text" name="nome">
    <label for=""> Telefone : </label>
    <input type="tel" name="telefone">
    <label for=""> E-mail : </label>
    <input type="email" name="email">
    <label for=""> CPF : </label>
    <input type="number" name="cpf">
    <label for=""> Nome da empresa: </label>
    <input type="text" name="nome_empresa">
    <label for=""> CNPJ : </label>
    <input type="number" name="cnpj">




    <input type="submit" value="Cadastrar usuário">

</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\learning\learning\resources\views/addForm.blade.php ENDPATH**/ ?>
