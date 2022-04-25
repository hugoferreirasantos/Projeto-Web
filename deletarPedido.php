<?php
require_once "conectaBusca.php";
$id = $_GET["id"];

try {
  
  $stmt = $pdo->prepare('DELETE FROM vendas WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  echo ("<script>alert('Dados do Cliente excluídos com sucesso...');location.href = 'buscaPedido.php';</script>");
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>