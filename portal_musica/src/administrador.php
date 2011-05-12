<?php include '_inc/header.php';?>
	<script>
		$('document').ready(
			function(){
				$('form').submit(
					function(){
						$('#carregando').show();
						$.post($('form').attr('action'), {login:$('#ilogin').val(), senha:$('#isenha').val()}, function(e){
							if(e == 'sucesso')
								$('#all').load('lista_artigo.php');
							else{
								$('#erro').show().html(e).delay(800).fadeOut();
							}
						});
						$('#carregando').hide();
						return false;
					}
				);
			}
		);
	</script>
	<div id='login'>
		<div id='erro'></div>
		<form action="login.php" method="post" id='login'>
		<table id='login'>
			<tbody>
				<tr>
					<td><label for='ilogin'>Login</label></td>
					<td><input type="text" name='login' id='ilogin' /></td>
				</tr>
				<tr>
					<td><label for='isenha'>Senha</label></td>
					<td><input type="password" id='isenha' name='senha' /></td>
				</tr>
			</tbody>
		</table>
		<input type='submit' value='Enviar' />
		</form>
	</div>
<?php include '_inc/footer.php' ?>