<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pedido</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    
</head>
<body>
    <nav>
    <div>
    <div>
    <ul>
         <li class="pedido"><a href="buscaPedido.php">Pedidos</a><li>
        <li class= "contato"><a href="contatoCliente.php">Contato</a><li>
    </ul>
    </div>
    </nav>
    <form action="gravarPedido"  method="post">
        <h1>Cadastro de Pedidos<h1>
        <input  id= "nome" type="text" name="nome" maxlength="35" placeholder=" Nome do cliente...">
        <br>
        <input type="text" name="fone" maxlength="14" placeholder=" Telefone do cliente...">
        <br>
        <input type="text" name="email" maxlength="35" placeholder=" E-mail do cliente..." >
        <br>
        <input type="text" name="endereco" maxlength="35"  placeholder=" Endereço do cliente...">
        <br>
    <p class="paragrafo1">Escolha um sanduiche:<select type="text" name="pedido" maxlength="25"  placeholder=" Escolha um pedido">
            <option value="x-simples">X-Tudo</option>
            <option value="x-tudo">X-Simples</option>
            <option value="x-becon">X-Becon</option>
            <option value="x-frango">X-Frango</option>
        </select></p>
        <input id="quantidade" type="number" name="quantidade" maxlength="25"  placeholder=" Informe a quantidade">
        <br>
            <p class="paragrafo2">Valor do sanduiche:<select id="valorsanduiche" type="number" name="valor" maxlength="25">
            <option value="10.00">10 reais</option>
            <option value="20.00">20 reais</option>
            <option value="30.00">30 reais</option>
            <option value="40.00">40 reais</option>
        </select></p>
        <input id="idtotal" type="number" name="total" maxlength="25"  placeholder=" Total">
        <br>
        <input type="submit" name="btGrabar" value="Gravar">
        </form>
        <script>
            var nome = getElementById("nome");

            nome.addEventListener('focus',()=>{
                nome.style.borderColor = #4A5F6A;
            });
            nome.addEventListener('blur',()=>{
                nome.style.borderColor = #4A5F6A;
            });

        </script>
        
</body>
</html>
