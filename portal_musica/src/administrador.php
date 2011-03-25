<?php include '_inc/header.php';?>
	<div id='login'>
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