<style type="text/css">
/*** Alerta Verde ***/ 
	.alerta_verde{
		margin:20% auto;
		width:300px;
		height:auto;
		padding:10px;
		border:1px solid #060;
		background:#090;
		text-align:center; 
	}
	.alerta_verde h1{
		color:white;
		font-family:Verdana, Geneva, sans-serif;
		font-size:12px;
	}
/*** Alerta Vermelho ***/ 
	.alerta_vermelho{
		margin:20% auto;
		width:300px;
		height:auto;
		padding:10px;
		border:1px solid #900;
		background: #F00;
		text-align:center;
	}
	.alerta_vermelho h1{
		color:white;
		font-family:Verdana, Geneva, sans-serif;
		font-size:12px;
	}	
	
</style>
<?php
require("../conexao.php");
$nome= $_POST['nome'];
$query = "INSERT INTO `categorias_servico4` (`id`, `nome`) VALUES (NULL, '$nome');";
$inserir = mysql_query($query);
if ($inserir) {
	echo "<div class='alerta_verde'>";
	echo "<h1>Categoria inserida com sucesso.</h1>";
	echo '</div>';
} else {
	echo "<div class='alerta_vermelho'>";
	echo "<h1>Não foi possível inserir a Subcategoria, tente novamente.</h1>";
	echo '</div>';
// Exibe dados sobre o erro:
echo "<br />Dados sobre o erro:" . mysql_error();
}
?>
<script type="text/javascript">setTimeout("javascript:history.go(-1);",1250);</script>