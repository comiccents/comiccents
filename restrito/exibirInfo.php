<?php

//include_once '../conexao/conecta.php';
//include_once '../funcoes/funcoesUteis.inc';
//validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");

//include_once '../funcoes/funcoesUteis.inc';
//validaAutenticacao("../logout.php", "../conexao/conecta.php, ADM");
echo "<meta charse=UTF-8>";

$sql = "SELECT * FROM usuarios where COD_USUARIO=COD_USUARIO" ;
$result = mysql_query($sql);
echo "<table border=1>";

while ($usuario = mysql_fetch_array($result))
{
    $cod = $usuario['COD_USUARIO'];
    $nome_usuario = $usuario['NOME_USUARIO'];
    $email_usuario = $usuario['EMAIL_USUARIO'];
    $senhaUsuario = $usuario['SENHA_USUARIO'];
    $logradouro_usuario = $usuario['LOGRADOURO_USUARIO'];
    $rg_usuario = $usuario['RG_USUARIO'];
    $cpf_usuario = $usuario['CPF_USUARIO'];
    $sexo_usuario = $usuario['SEXO_USUARIO'];
    $data_nasc_usuario= $usuario['DATA_NASCIMENTO'];
    $tipo_usuario = $usuario['TIPO_USUARIO'];
    $telefone_usuario = $usuario['TELEFONE_USUARIO'];
    $cidade_usuario = $usuario['CIDADE_USUARIO'];
    $estado_usuario = $usuario['ESTADO_USUARIO'];
    $numero_usuario = $usuario['NUMERO_USUARIO'];
    $complemento_usuario = $usuario['COMPLEMENTO_USUARIO'];   
    
    
    echo "<tr>";
    echo "<td>".$cod."</td>";
    echo "<td>".utf8_decode($nome_usuario)."</td>";
    echo "<td>".utf8_decode($email_usuario)."</td>";
    echo "<td>".utf8_decode($senhaUsuario)."</td>";
    echo "<td>".utf8_decode($logradouro_usuario)."</td>";
    echo "<td>".utf8_decode($rg_usuario)."</td>";
    echo "<td>".utf8_decode($cpf_usuario)."</td>";
    echo "<td>".utf8_decode($sexo_usuario)."</td>";
    echo "<td>".utf8_decode($data_nasc_usuario)."</td>";
    echo "<td>".utf8_decode($tipo_usuario)."</td>";
    echo "<td>".utf8_decode($telefone_usuario)."</td>";
    echo "<td>".utf8_decode($cidade_usuario)."</td>";
    echo "<td>".utf8_decode($estado_usuario)."</td>";   
    echo "<td>".utf8_decode($numero_usuario)."</td>";
    echo "<td>".utf8_decode($complemento_usuario)."</td>";   
        
    echo "<td><a href =frmatualizarProduto.php?codproduto=".$cod.">Atualizar</a></td>";
    echo "<td><a href =excluirProduto.php?codproduto=".$cod.">Excluir</a></td>";
    echo "</tr>";
    
    
    
    
}

?>
