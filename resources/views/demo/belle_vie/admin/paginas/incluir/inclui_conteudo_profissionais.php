<?php include('../../acoes/conexao.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Inclui Conteúdo Profissionais -  Belle Vie</title>
    <link href="../../css/resetcss.css"  rel="stylesheet" type="text/css">
    <link href="../../css/geral.css"  rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	< ![endif]-->    
</head>

<body>
	<header>
    	<h1>Administrador - Inclui Conteúdo Profissionais</h1>
        <h2>Seja bem vindo, Administrador</h2>	
    </header>
    <div class="nav_principal">
    	<ul>
        	<li><a href="../../index.php">Principal</a></li>
            <li><a href="../empresa.php">Empresa</a></li>
            <li><a href="../servicos.php">Serviços</a></li>
            <li><a href="../profissionais.php">Profissionais</a></li>
            <li><a href="../depoimentos.php">Depoimentos</a></li>            
        </ul>
    </div>    
    <div id="breadcrumb">
    	<ul>
        	<li>Você está aqui:</li>
            <li><a href="inclui_conteudo_profissionais.php">Inclui Conteúdo Profissionais</a></li>
        </ul>
    </div><!--breadcrumb-->
    <nav>
		<ul>
            <li class="odd"><a href="inclui_profissionais.php">Gerenciar Profissionais</a></li>
            <?php
                $sql = 'SELECT * FROM categorias_profissionais';
                $resultado = mysql_query($sql)
                or die ("Não foi possível realizar a consulta.");
                while ($linha=mysql_fetch_array($resultado))
                {
                  echo '<li><a href="inclui_conteudo_profissionais.php?id_subcategoria='.$linha['id'].'">'.$linha['nome'].'</a></li>';											  
                }
            ?>	
        </ul>
    </nav>         
	<section id="conteudo">
        <aside>
    		<h3>Dicas</h3>
            <p>Aqui você pode gerenciar os profissionais</p>
    	</aside>
        <article>
			<?php
				$id_subcategoria=$_GET['id_subcategoria'];
				$sql = 'SELECT * FROM categorias_profissionais WHERE id='.$id_subcategoria.'';
				$resultado = mysql_query($sql)
				or die ("Não foi possível realizar a consulta.");
				while ($linha=mysql_fetch_array($resultado))
				{
				  echo '<h2>Editar:'.$linha['nome'].'</h2>';						  
				}
			?>	
            <?php
				$verifica = mysql_query('SELECT * FROM conteudo_profissionais WHERE id_subcategoria='.$id_subcategoria.''); 
				if(mysql_num_rows($verifica) > 0) { 
				$id_subcategoria=$_GET['id_subcategoria'];
				$sql = 'SELECT * FROM conteudo_profissionais WHERE id_subcategoria='.$id_subcategoria.' LIMIT 0,1';
				$resultado = mysql_query($sql)
				or die ("Não foi possível realizar a consulta.");
				while ($linha=mysql_fetch_array($resultado))
					  {
						  //Formulário para editar							
						  echo '<form method="post" action="../../acoes/edita/edita_conteudo_profissionais.php?id_subcategoria='.$id_subcategoria.'" enctype="multipart/form-data">';	
						  echo '<label>Texto</label><br>';	
						  echo '<textarea cols="35" rows="10" name="texto">'.$linha['texto'].'</textarea><br>';
						  echo '<input type="submit" value="Enviar">';
						  echo '</form>';				  
					  }
				}  else { 
						  //Formulário para incluir
						  echo '<form method="post"  action="../../acoes/inclui/inclui_conteudo_profissionais.php?id_subcategoria='.$id_subcategoria.'" enctype="multipart/form-data">';						  
						  echo '<label>Texto</label><br>';	
						  echo '<textarea cols="35" rows="10" name="texto">'.$linha['texto'].'</textarea><br>';
						  echo '<input type="submit" value="Enviar">';
						  echo '</form>';				
				}
			?>	
        </article>
        <article>
        	<h2>Edita Foto</h2>
            <?php
				$verifica = mysql_query('SELECT * FROM  `fotos_conteudo_profissionais` WHERE id_subcategoria='.$id_subcategoria.''); 
				if(mysql_num_rows($verifica) > 0) {
				$id_subcategoria=$_GET['id_subcategoria']; 
				$sql = 'SELECT * FROM  `fotos_conteudo_profissionais` WHERE id_subcategoria='.$id_subcategoria.'';
				$resultado = mysql_query($sql)
				or die ("Não foi possível realizar a consulta.");
				while ($linha=mysql_fetch_array($resultado))
					  {
						  //Formulário para editar
						  echo '<form method="post"  action="../../acoes/edita/edita_upload_foto_profissionais.php?id_subcategoria='.$id_subcategoria.'" enctype="multipart/form-data">';
						  echo '<label>Escolha a foto: (O tamanho ideal é 160x160px)</label><br>  ';
						  echo '<input type="file" name="arquivo"><br>';
						  echo '<input type="submit" value="Enviar">  ';
						  echo '</form>';	
						  $sql = 'SELECT * FROM fotos_conteudo_profissionais WHERE id_subcategoria='.$id_subcategoria.'';
					 	 $resultado = mysql_query($sql)
					  	or die ("Não foi possível realizar a consulta.");
					  	while ($linha=mysql_fetch_array($resultado))
					  	{
						  echo '<img src="../../../images/profissionais/'.$linha['nome_thumb'].'" width="120px" height="100px" style="float:right; margin-top:-100px;" />';
						  
					  	}					
			  
					  }
				}  else { 
						  //Formulário para incluir
						  echo '<form method="post"  action="../../acoes/inclui/upload_foto_conteudo_profissionais.php?id_subcategoria='.$id_subcategoria.'" enctype="multipart/form-data">';
						  echo '<label>Escolha a foto: (O tamanho ideal é 160x160px)</label><br>  ';
						  echo '<input type="file" name="arquivo"><br>';
						  echo '<input type="submit" value="Enviar">  ';
						  echo '</form>';
						  		
				}
			?>
        </article>
    </section>
    <footer>
    	<h4>Copyright - todos os direitos reservados - Desenvolvimento: <a href="http://www.novaz.com.br" target="_blank">Novaz - desenvolvendo o futuro da web</a> </h4>
    </footer>
</body>
</html>