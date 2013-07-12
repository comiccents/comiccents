<?php
//include_once '../funcoes/funcoesUteis.inc';
//validaAutenticacao("logout.php","../conecta.php","ADM");
?>
<html>
    <head>
        <title>Aterar Produtos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <?php
     include_once '../conexao/conecta.php';
     $codProdutos = $_GET['codproduto'];
     $consulta = mysql_query("SELECT * FROM produtos
                              WHERE $codProdutos = COD_PRODUTO;");
     $result = mysql_fetch_assoc($consulta);       
     $nome = $result['NOME_PRODUTO'];
     $descricao = $result['DESCRICAO_PRODUTO'];
     $precoCusto = $result['PRECO_PRODUTO'];
     $precoVenda = $result['PRECOVENDA_PRODUTO'];
     $qtdeProduto = $result['QUANTIDADEESTOQUE_PRODUTO'];
     $estado_fisico = $result['ESTADO_FISICO'];
     $img = $result['IMAGEMURL_PRODUTO'];
     $numero_pags = $result['NUMERO_PAGS'];
     $editora = $result['EDITORA_PRODUTO'];
     $codForn = $result['FORNECEDORES_COD_FORNECEDOR'];
    ?>
    <body>
        <form method="post" action="confirmaalteraprod.php?codProdutos=<?php echo"$codProdutos";?>">
            <label>Nome</label>
            <input type="text" name="nome" maxlength="50" value="<?php echo"$nome"; ?>" /><br />
            <label>Descrição</label>
            <input type="text" name="descricao" maxlength="50" value="<?php echo"$descricao"; ?>" /><br />
            <label>Preço Custo</label>
            <input type="text" name="precocusto" maxlength="50" value="<?php echo"$precoCusto"; ?>" /><br />
            <label>Preço Venda</label>
            <input type="text" name="precovenda" maxlength="50" value="<?php echo"$precoVenda"; ?>" /><br />
            <label>Quantidade em estoque</label>
            <input type="text" name="qtdeestoque" maxlength="50" value="<?php echo"$qtdeProduto"; ?>" /><br />
            <label>Estado Físico</label>
            <input type="text" name="estado_fisico" maxlength="50" value="<?php echo"$estado_fisico"; ?>" /><br />
            <label>Número de Páginas</label>
            <input type="text" name="numero_pags" maxlength="50" value="<?php echo"$numero_pags"; ?>" /><br />
            <label>Editora</label>
            <input type="text" name="editora" maxlength="50" value="<?php echo"$editora"; ?>" /><br />
            <label>Codigo do Fornecedor</label>
            <input type="text" name="codforn" maxlength="50" value="<?php echo"$codForn"; ?>" /><br />
            <label>Imagem da Capa</label>
            <input type="text" name="img" maxlength="50" value="<?php echo"$img"; ?>" /><br />
            <input type="submit" value="Alterar" />
        </form>
    </body>
</html>
