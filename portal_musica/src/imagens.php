<table>
<?php
	$diretorio = '../imagens/artigos';
	$ponteiro = opendir($diretorio);
	$i =0;
	while ($nome = readdir($ponteiro)):
		if($i==0 || $i==3){
			if($i!=0)
				echo '</tr>';
			echo '<tr>';
			$i = 0;
		}
?>
	<td><img src='../imagens/artigos/<?php echo $nome; ?>' style='width: 100px; height:100px;'/></td>
<?php 
		$i++;
	endwhile;
?>
</table>