<?php

include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");

//include_once '../funcoes/funcoesUteis.inc';
//validaAutenticacao("../logout.php", "../conexao/conecta.php, ADM");
echo "<meta charse=UTF-8>";
$sql = "SELECT * FROM produtos";
$result = mysql_query($sql);
echo "<table border=1>";
while ($produtos = mysql_fetch_array($result))
{
    $cod = $produtos['COD_PRODUTO'];
    $nomeProduto = $produtos['NOME_PRODUTO'];
    $descricao_produto = $produtos['DESCRICAO_PRODUTO'];
    $preco_produto = $produtos['PRECO_PRODUTO'];
    $precoVenda_produto = $produtos['PRECOVENDA_PRODUTO'];
    $qtde_estoque = $produtos['QUANTIDADEESTOQUE_PRODUTO'];
    $tamanho_produto = $produtos['TAMANHO_PRODUTO'];
    $numero_pags = $produtos['NUMERO_PAGS'];
    $estado_fisico = $produtos['ESTADO_FISICO'];
    $editora_produto = $produtos['EDITORA_PRODUTO'];
    $imagem_url = $produtos['IMAGEMURL_PRODUTO'];
    $fornecedor_produto = $produtos['FORNECEDORES_COD_FORNECEDOR'];
    
    
    echo "<tr>";
    echo "<td>".$cod."</td>";
    echo "<td>".utf8_decode($nomeProduto)."</td>";
    echo "<td>".utf8_decode($descricao_produto)."</td>";
    echo "<td>".utf8_decode($preco_produto)."</td>";
    echo "<td>".utf8_decode($precoVenda_produto)."</td>";
    echo "<td>".utf8_decode($qtde_estoque)."</td>";
    echo "<td>".utf8_decode($tamanho_produto)."</td>";
    echo "<td>".utf8_decode($numero_pags)."</td>";
    echo "<td>".utf8_decode($estado_fisico)."</td>";
    echo "<td>".utf8_decode($editora_produto)."</td>";
    echo "<td>".utf8_decode($imagem_url)."</td>";
    echo "<td>".utf8_decode($fornecedor_produto)."</td>";      
    
    echo "<td><a href =alterarprodutos.php?codproduto=".$cod.">Atualizar</a></td>";
    echo "<td><a href =excluirProduto.php?codproduto=".$cod.">Excluir</a></td>";
    echo "</tr>";
    
    
    
    
}






?>
