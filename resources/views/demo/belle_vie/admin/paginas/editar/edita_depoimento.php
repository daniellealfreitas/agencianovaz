<?php include('../../acoes/conexao.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Editar Depoimento -  Belle Vie</title>
    <link href="../../css/resetcss.css"  rel="stylesheet" type="text/css">
    <link href="../../css/geral.css"  rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	< ![endif]-->    
</head>

<body>
	<header>
    	<h1>Administrador - Editar Depoimento</h1>
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
            <li><a href="edita_depoimento.php">Edita Depoimento</a></li>
        </ul>
    </div><!--breadcrumb-->
    <nav>
    	<ul>
            <li><a href="../depoimentos.php">Depoimentos</a></li>
            <li><a href="../incluir/incluir_depoimento.php">Incluir Depoimentos</a></li>   
        </ul>
    </nav>         
	<section id="conteudo">
        <aside>
    		<h3>Dicas</h3>
            <p>Aqui você adicionar editar depoimentos</p>
    	</aside>
        <article>
        	<?php
				$id=$_GET['id'];
				$sql = 'SELECT * FROM conteudo_depoimentos WHERE id='.$id.'';
				$resultado = mysql_query($sql)
				or die ("Não foi possível realizar a consulta.");
				while ($linha=mysql_fetch_array($resultado))
				{
				  echo '<h2>Editar:'.$linha['autor'].'</h2>';						  
				}
			?>	
            <?php
				$verifica = mysql_query('SELECT * FROM conteudo_depoimentos WHERE id='.$id.''); 
				if(mysql_num_rows($verifica) > 0) { 
				$id=$_GET['id'];
				$sql = 'SELECT * FROM conteudo_depoimentos WHERE id='.$id.' LIMIT 0,1';
				$resultado = mysql_query($sql)
				or die ("Não foi possível realizar a consulta.");
				while ($linha=mysql_fetch_array($resultado))
					  {
						  //Formulário para editar	
						  echo '<form method="post"  action="../../acoes/edita/edita_depoimento.php?id='.$id.'" enctype="multipart/form-data">';						
						  echo '<label>Autor:</label><br>';
						  echo '<input type="text" name="autor" size="45" value="'.$linha['autor'].'"><br>';
						  echo '<label>Depoimento:</label><br>';
						  echo '<textarea cols="35" rows="10" name="texto">'.$linha['texto'].'</textarea>  <br>';
						  echo '<input type="submit" value="Enviar">';
						  echo '</form>';
				  
					  }
				}  else { 
						  //Formulário para incluir
						  echo '<form method="post"  action="../../acoes/edita/edita_depoimento.php?id='.$id.'" enctype="multipart/form-data">';						
						  echo '<label>Autor:</label><br>';
						  echo '<input type="text" name="autor" size="45" value="'.$linha['autor'].'"><br>';
						  echo '<label>Depoimento:</label><br>';
						  echo '<textarea cols="35" rows="10" name="texto">'.$linha['texto'].'</textarea>  <br>';
						  echo '<input type="submit" value="Enviar">';
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