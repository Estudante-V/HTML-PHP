<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("verificar.php");
    ?>
    <form action="" method="post">
        <label>Nome Completo:</label><br>
        <input type="text" placeholder="Digite seu nome" name="nome" minlength="2" maxlength="50" required><br>
        <label>Email:</label><br>
        <input type="email" placeholder="Digite seu email" required name="email"><br>
        <input type="submit" value="Enviar" name="enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>