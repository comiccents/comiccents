<!DOCTYPE html>
<html>
<head>
<title>Comic Cents</title>
<link rel="stylesheet" type="text/css" href="../estilos.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

</head>
<body>
      
  <section id="principal">
  
    <section id="cabecalho">
	 <header> 
	
             <a href="indexrestrito.php"> <img src="../imagens/topo/logo_comiccents.png" id="logo"/> </a>
             
            <label id="campo_busca">
                <form name="searchform" method="post" action="../exibir_busca.php">
                <input type="text" name="buscar" placeholder="Busque aqui" />
                <input type="submit" value="Buscar" />
                </form>
            </label>  
                <br />
	 
            <nav>
		<h1 id="menu_topo">
                 <a class="link_titulo" href="index.php">  Home    </a> &nbsp; &nbsp; | &nbsp; &nbsp;
		 <a class="link_titulo" href="marvel.php"> Marvel  </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
		 <a class="link_titulo" href="dc.php">     DC      </a> &nbsp; &nbsp; | &nbsp; &nbsp; 
		 <a class="link_titulo" href="image.php">  Image   </a> &nbsp; &nbsp; | &nbsp; &nbsp;
		 <a class="link_titulo" href="manga.php">  Mangás  </a> &nbsp; &nbsp; | &nbsp; &nbsp;
                 <a class="link_titulo" href="hentai.php"> Hentai  </a> &nbsp; &nbsp; | &nbsp; &nbsp;
                 <a class="link_titulo" href="gibi.php">   Gibis   </a> &nbsp; &nbsp; | &nbsp; &nbsp;
                 <a class="link_titulo" href="album.php">  Álbuns de Luxo  </a>
		</h1>
            </nav>
	 </header>
    </section> 	
	
	
	
    
    <section id="menu_esquerdo">
	 <nav id="lateral">
	 
	 <br />
	 
                <form action="../login.php" name="login" method="post" id="formulario">
                
                 <a href="exibirInfo.php" id="cadastro"> Minhas Informa&ccedil;&otilde;es </a><br/><br/>
                
                 <a href="../logout.php" id="cadastro"> Logout </a><br/><br/>
				   
                </form>
			
			
			
	 
	 
           
            <h1> Destaques </h1>
             <form name="searchform" method="post" action="../busca_menu.php" target="quadro">
              <ul class="nav">
                   <li> <a href="../destaques/produto_homemaranha.php">Homem-aranha</a> </li>
                   <li> <a href="../destaques/produto_batman.php">Batman</a> </li>
                   <li> <a href="../destaques/produto_superman.php">Super-man</a> </li>
        	   <li> <a href="../destaques/produto_liga.php">Liga da Justi&ccedil;a</a> </li>
        	   <li> <a href="../destaques/produto_vingadores.php">Vingadores</a> </li>
                   <li> <a href="../destaques/produto_homemdeferro.php">Homem de Ferro</a> </li> 
                   <li> <a href="../destaques/produto_capitaoamerica.php">Capit&atilde;o Am&eacute;rica</a> </li>
        	   <li> <a href="../destaques/produto_wolverine.php">Wolverine</a> </li>
        	   <li> <a href="../destaques/produto_xmen.php">X-men</a> </li>
                   <li> <a href="../destaques/produto_hulk.php">Hulk</a> </li>
                   <li> <a href="../destaques/produto_flash.php">Flash</a> </li>
                   <li> <a href="../destaques/produto_lanternaverde.php">Lanterna Verde</a> </li>
                   <li> <a href="../destaques/produto_deadpool.php">Deadpool</a> </li>
                   <li> <a href="../destaques/produto_dragonball.php">Dragon Ball</a> </li>
                   <li> <a href="../destaques/produto_onepiece.php">One Piece</a> </li>
                   <li> <a href="../destaques/produto_deathnote.php">Death Note</a> </li>
                   <li> <a href="../destaques/produto_naruto.php">Naruto</a> </li>
                   <li> <a href="../destaques/produto_bleach.php">Bleach</a> </li>
                   <li> <a href="../destaques/produto_spawn.php">Spaw</a> </li>
                   <li> <a href="../destaques/produto_monica.php">Turma da M&ocirc;nica</a> </li>
              </ul>
             </form>
  
	 </nav>
    </section>	

      
	
      
      
      
      
      
      
      
    <section id="conteudo">

                <?php

include_once'../conexao/conecta.php';

$sql = "SELECT * FROM produtos";
$qr = mysql_query($sql) or die (mysql_error());

while($ln = mysql_fetch_assoc($qr)){
    
echo '<link rel="stylesheet" type="text/css" href="../estilo_conteudo.css" />';
 
echo '<div><h3>'.$ln['NOME_PRODUTO'].'</h3> <br />';

echo '<img src="../imagens/'.$ln['IMAGEMURL_PRODUTO'].'" /> <br />';

echo 'Pre&ccedil;o: R$'.$ln['PRECOVENDA_PRODUTO'].'<br />';

echo '<a href="../carrinho.php?acao=add&COD_PRODUTO='.$ln['COD_PRODUTO'].'" id="comprar">Comprar</a></div>';



}

?>	
	  
    </section>

      
      
      
      
      
      
      
      
      
    <section id="rodape">
	  <footer>
	    <center>
		<a href="">Projeto</a>      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<a href="">Equipe</a>       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<a href="">Mapa do Site</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<a href="">Fale conosco</a>
		</center>
		
		<br />
		
	    <center>TCC - Projeto acad&ecirc;mico - INI3CM - 2013<br/>
	    <center>Rua Calopsita, 11 - Engenho Novo - Barueri - CEP: 06460-112 - 2013</center>
		
	  </footer>
    </section>
	
	
	
		
	
	
	 
</section>
</body>
</html>