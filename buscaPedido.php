<?php
require_once "conectaBusca.php";

$cor = "#FF6347";
$consulta = $pdo->query("SELECT * FROM  vendas;");
echo "
     <table border=1>
      <tr>
      <td class=id>ID</td>
      <td class=nome>NOME</td>
      <td class=fone>FONE</td>
      <td class=email>EMAIL</td>
      <td class=endereco>ENDERECO</td>
      <td class=pedido>PEDIDO</td>
      <td class=quantidade>QUANTIDADE</td>
      <td class=valor>VALOR PEDIDO</td>
      <td class=total>TOTAL</td>
      </tr>";

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    if($cor == "#FF6347"){$cor = "#ffffff";}else{$cor = "#FF6347";}
    echo 
    "<tr bgcolor=$cor>
    <td>{$linha['id']}</td>
    <td>{$linha['nome']}</td>
    <td>{$linha['fone']}</td>
    <td>{$linha['email']}</td>
    <td>{$linha['endereco']}</td>
    <td>{$linha['pedido']}</td>
    <td>{$linha['quantidade']}</td>
    <td>{$linha['valor']}</td>
    <td>{$linha['total']}</td>
    <td><img src=imgs/edita.png height=30></td>
    <td><a href=deletarPedido.php?id={$linha['id']}><img src=imgs/del.png height=30></a></td>
    </tr>";
}  
echo "</table><br><h1 onclick=print();>IMPRIMIR</h1>";
?>