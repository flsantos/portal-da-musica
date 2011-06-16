<script src='../js/jquery-1.5.1.min.js'></script>
<script>
	$('document').ready(function(){				
//		$('div#cel_img').hover(
//				function(){
//					$(this).addClass('cel_fundo');
//				},
//				function(){
//					$(this).removeClass('cel_fundo');
//				}
//		);
	});
</script>
<link rel='stylesheet' href='../css/cadastro.css'>
<table id='table_img'>
<?php
	$diretorio = '../imagens/artigos';
	$ponteiro = opendir($diretorio);
	$i =0;
	while ($nome = readdir($ponteiro)):
		$extensao = substr($nome, -3);
		if($extensao == 'JPG' || $extensao == 'jpg' || $extensao == 'GIF' || $extensao=='gif' || $extensao == 'PNG' || $extensao == 'png'):
			if($i==0 || $i==3){
				if($i!=0)
					echo '</tr>';
				echo '<tr>';
				$i = 0;
			}
?>
		<td>
			<div id='cel_img'>
				<img id='cel_img' src='../imagens/artigos/<?php echo $nome; ?>' style='width: 150px; height:150px;'/>
			</div>	
		</td>
	
<?php 
			$i++;
		endif;
	endwhile;
?>
</table>