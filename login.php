<?php
include_once 'conexao/conecta.php';
session_start();
//$dataSalva = ("Y-n-j H:i:s");
//$_SESSION["ultimoAcesso"] = $dataSalva;

/*$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["senha"] = $_POST["senha"];
*/

$nomeUsuario = $_POST["usuario"];
$senhaUsuario = $_POST["senha"];

//echo $nomeUsuario;
//echo $senhaUsuario;
$sql = "SELECT NOME_USUARIO,SENHA_USUARIO,TIPO_USUARIO
              FROM usuario
                          WHERE NOME_USUARIO = '$nomeUsuario'";
                        
$resultado = mysql_query($sql);
$linhas = mysql_num_rows($resultado);
  

if($linhas == 0)
{
  echo "Usuario não encontrado<br/>";
  echo"<a href=index.php>Voltar</a>;";
}
else{
    while($usuario = mysql_fetch_array($resultado)){
        if($usuario["TIPO_USUARIO"] === "RES"){
            if($senhaUsuario !== $usuario["SENHA_USUARIO"]){
                echo "Senha Invalida!";
                echo"<a href=frmlogin.html>Voltar</a>;";
            }
            else{
                $_SESSION["usuario"] = $nomeUsuario;
                $_SESSION["senha"] = $senhaUsuario;
                header("Location:indexrestrito.php");
            }
            }else{
                echo "Tipo de usuario inválido !";
                echo"<a href=index.php>Voltar</a>;";
        }
    }
}

?>
