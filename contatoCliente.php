<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleFalarComCliente.css">
    <title>Falar com Cliente</title>
</head>
    <form action="enviar-email.php" method="post">
        <h3>Enviar mensagem para cliente</h3>
        <label for="Nome">Nome</label><br>
        <input type="text" name="nome" required><br>

        <label for="Sobrenome">Sobrenome</label><br>
        <input type="text" name="sobrenome" required><br>

        <label for="E-mail">E-mail</label><br>
        <input type="text" name="email" required><br>

        <label for="">Mensagem</label><br>
        <textarea  type="text" name="mensagem"required ></textarea>

        <input type="submit" name="Enviar">


    </form>
</body>
</html>