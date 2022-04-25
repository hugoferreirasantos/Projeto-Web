<?php
$nome = $_POST["nome"];
$fone = $_POST["fone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$pedido = $_POST["pedido"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$total = $_POST["total"];
 // echo("$nome, $fone, $endereco , $quantidade , $pedido");]

 try {
  
    $pdo = new PDO('mysql:host=localhost;dbname=sanduicheria', 'root', Null);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $pdo->prepare('INSERT INTO vendas VALUES(:id, :nome, :fone, :email, :endereco, :pedido, :quantidade, :valor, :total)');
    $stmt->execute(array(
      ':id' => Null,
      ':nome' => $nome,
      ':fone' => $fone,
      ':email' => $email,
      ':endereco' => $endereco,
      ':pedido' => $pedido,
      ':quantidade' => $quantidade,
      ':valor' => $valor,
      ':total' => $total,
    ));
  
    echo("<script>alert('Pedido registrado com sucesso...');location.href = 'index.php';</script>");
  } 
  catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

?>