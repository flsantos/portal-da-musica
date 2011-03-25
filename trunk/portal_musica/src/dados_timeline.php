<?php 
	include '../app/time/adodb-time.inc.php';
		
		function eventos(){
			$conexao = mysql_connect('localhost', 'root', '');
			$db = mysql_select_db('portal_musica', $conexao);
			$query = 'select A.*, DATE_FORMAT(A.data_inicio, "%a, %d %b %Y 00:00:00 GMT+0530 ") as inicio, DATE_FORMAT(A.data_termino, "%a, %d %b %Y 00:00:00 GMT+0530 ") as termino from artigo A join artigo_pertence_timeline T on A.id = T.artigo_id';
			$resultado = mysql_query($query, $conexao);
			while($row = mysql_fetch_array($resultado)){
				$data_inicio = $row['inicio'];
				if($row['data_termino'] == NULL || $row['data_termino'] == '0000-00-00'){
					$data_termino = NULL;
					$durationEvent = NULL;
				}
				else{
					$data_termino = $row['termino'];
					$durationEvent = TRUE;
				}
				$add = explode('/', $_SERVER['PHP_SELF']);
				$caminho = 'http://'.$_SERVER['HTTP_HOST'].'/'.$add[1].'/'.$add[2].'/'.'visualizar_artigo.php/?id='.$row['id'];
				
				 
				$eventAtts[] = array(
					'start' => $data_inicio,
					'end' => $data_termino,
					'durationEvent' => $durationEvent,
					'title' => $row['titulo'],
					'link' => $caminho
				); 
			}
			return $eventAtts;
		}
		
		$json_data = array(
			'dateTimeFormat' => 'Gregorian', 
			'events' => eventos()
		);
		
		echo json_encode($json_data);
		
		
	?>