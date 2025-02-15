<?php include('../acoes/conexao.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Empresa -  Belle Vie</title>
    <link href="../css/resetcss.css"  rel="stylesheet" type="text/css">
    <link href="../css/geral.css"  rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	< ![endif]-->    
</head>

<body>
	<header>
    	<h1>Administrador - Empresa</h1>
        <h2>Seja bem vindo, Administrador</h2>
    </header>
    <div class="nav_principal">
    	<ul>
        	<li><a href="../index.php">Principal</a></li>
            <li><a href="empresa.php">Empresa</a></li>
            <li><a href="servicos.php">Serviços</a></li>
            <li><a href="profissionais.php">Profissionais</a></li>
            <li><a href="depoimentos.php">Depoimentos</a></li>            
        </ul>
    </div>    
    <div id="breadcrumb">
    	<ul>
        	<li>Você está aqui:</li>
            <li><a href="empresa.php">Empresa</a></li>
        </ul>
    </div><!--breadcrumb-->
    <nav>
    	<ul>
            <li><a href="empresa.php">Empresa</a></li>
        </ul>
    </nav>         
	<section id="conteudo">
        <aside>
    		<h3>Dicas</h3>
            <p>Aqui você pode alterar o texto presente na seção "Empresa" do website, assim como pode alterar as 4 fotos presentes na página.</p>
    	</aside>
        <article>
        	<h2>A Empresa</h2>
            <br>
            <form method="post" action="../acoes/edita/edita_empresa.php" enctype="multipart/form-data">
            	<label>Titulo:</label><br>
				  <?php
					  $sql = 'SELECT * FROM empresa WHERE id=1';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  echo '<input type="text" name="titulo" size="60" value="'.$linha['titulo'].'"><br><br>';
						  echo '<textarea rows="10" cols="47" name="texto">'.$linha['texto'].'</textarea> <br>';
					  }
                ?>	  
                <input type="submit" value="Enviar">
            </form>
        </article>
        <article>
        	<h2>Edita Foto 1</h2>
            <form method="post"  action="../acoes/edita/edita_fotos_empresa.php?id=1" enctype="multipart/form-data">
            	<label>Link da foto1:</label><br>
                <input type="text" name="link" size="60" value="http://"><br><br>                
                <label>Escolha a foto: (O tamanho ideal é 220x225px)</label><br>  
                <input type="file" name="arquivo"><br>
                <input type="submit" value="Enviar">                
            </form>
            <?php
					  $sql = 'SELECT * FROM fotos_empresa WHERE id=1';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  echo '<img src="../../images/empresa/'.$linha['thumb_foto'].'" style="float:right; margin-top:-140px;" />';
						  
					  }
			?>	
        </article>
        <article>
        	<h2>Edita Foto 2</h2>
            <form method="post"  action="../acoes/edita/edita_fotos_empresa.php?id=2" enctype="multipart/form-data">
            	<label>Link da foto2:</label><br>
                <input type="text" name="link" size="60" value="http://"><br><br>                
                <label>Escolha a foto: (O tamanho ideal é 220x225px)</label><br>  
                <input type="file" name="arquivo"><br>
                <input type="submit" value="Enviar">                
            </form>
            <?php
					  $sql = 'SELECT * FROM fotos_empresa WHERE id=2';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  echo '<img src="../../images/empresa/'.$linha['thumb_foto'].'" style="float:right; margin-top:-140px;" />';
						  
					  }
			?>	
        </article>
        <article>
        	<h2>Edita Foto 3</h2>
            <form method="post"  action="../acoes/edita/edita_fotos_empresa.php?id=3" enctype="multipart/form-data">
            	<label>Link da foto3:</label><br>
                <input type="text" name="link" size="60" value="http://"><br><br>                
                <label>Escolha a foto: (O tamanho ideal é 220x225px)</label><br>
                <input type="file" name="arquivo"><br>
                <input type="submit" value="Enviar">                
            </form>
            <?php
					  $sql = 'SELECT * FROM fotos_empresa WHERE id=3';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  echo '<img src="../../images/empresa/'.$linha['thumb_foto'].'" style="float:right; margin-top:-140px;" />';
						  
					  }
			?>	
        </article>
        <article>
        	<h2>Edita Foto 4</h2>
            <form method="post"  action="../acoes/edita/edita_fotos_empresa.php?id=4" enctype="multipart/form-data">
            	<label>Link da foto4:</label><br>
                <input type="text" name="link" size="60" value="http://"><br><br>                
                <label>Escolha a foto: (O tamanho ideal é 220x225px)</label><br>  
                <input type="file" name="arquivo"><br>
                <input type="submit" value="Enviar">                
            </form>
            <?php
					  $sql = 'SELECT * FROM fotos_empresa WHERE id=4';
					  $resultado = mysql_query($sql)
					  or die ("Não foi possível realizar a consulta.");
					  while ($linha=mysql_fetch_array($resultado))
					  {
						  echo '<img src="../../images/empresa/'.$linha['thumb_foto'].'" style="float:right; margin-top:-140px;" />';
						  
					  }
			?>	
        </article>        
    </section>
    <footer>
    	<h4>Copyright - todos os direitos reservados - Desenvolvimento: <a href="http://www.novaz.com.br" target="_blank">Novaz - desenvolvendo o futuro da web</a> </h4>
    </footer>
</body>
</html>