<?php
include_once '../conexao/conecta.php';
     $codProdutos = $_GET['codProdutos'];
     $nome = $_POST['nome'];
     $descricao = $_POST['descricao'];
     $precoCusto = $_POST['precocusto'];
     $precoVenda = $_POST['precovenda'];
     $qtdeProduto = $_POST['qtdeestoque'];
     $estado_fisico = $_POST['estado_fisico'];
     $img = $_POST['img'];
     $numero_pags = $_POST['numero_pags'];
     $editora = $_POST['editora'];
     $codForn = $_POST['codforn'];

$sql = "UPDATE produtos SET 
        NOME_PRODUTO = '$nome', 
        DESCRICAO_PRODUTO = '$descricao',
        PRECO_PRODUTO = '$precoCusto',
        PRECOVENDA_PRODUTO = '$precoVenda',
        QUANTIDADEESTOQUE_PRODUTO = '$qtdeProduto',
        FORNECEDORES_COD_FORNECEDOR = '$codForn',
        ESTADO_FISICO = '$estado_fisico',
        IMAGEMURL_PRODUTO = '$img',
        EDITORA_PRODUTO = '$editora',
        NUMERO_PAGS = '$numero_pags'
        WHERE COD_PRODUTO = '$codProdutos';";

$result = mysql_query($sql) or die(mysql_error());
if($result == TRUE ){
    echo "Alterado Com Sucesso.";
}
if($result == FALSE){
    echo "Ocorreu Algum erro";
    
    echo $result;
}


?>
