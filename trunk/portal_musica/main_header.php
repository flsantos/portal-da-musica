<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src='js/timeline_2.3.0/timeline_js/timeline-api.js?bundle=true' type="text/javascript"></script>
	<script type="text/javascript">
		var tl;
		var eventSource = new Timeline.DefaultEventSource();
		 function onLoad() {
			 Timeline.OriginalEventPainter.prototype._showBubble = function(x, y, evt) {
					document.location.href=evt.getLink();
				}
							 
		   var bandInfos = [
		     Timeline.createBandInfo({
		         width:          "70%", 
		         intervalUnit:   Timeline.DateTime.DECADE, 
		         intervalPixels: 50,
		         eventSource: eventSource,
		         date: 'Jan 01 1500 00:00:00 GMT'
		     }),
		     Timeline.createBandInfo({
		         width:          "30%", 
		         intervalUnit:   Timeline.DateTime.CENTURY, 
		         intervalPixels: 80,
		         eventSource: eventSource,
		         date: 'Jan 01 1500 00:00:00 GMT',
			     overview: true
		     })
		   ];
		   bandInfos[1].syncWith = 0;
		   bandInfos[1].highlight = true;
		   tl = Timeline.create(document.getElementById("menu-timeline"), bandInfos);
		   tl.loadJSON("src/dados_timeline.php?"+ (new Date().getTime()), function(json, url){eventSource.loadJSON(json, url);});

		 }

		 var resizeTimerID = null;
		 function onResize() {
		     if (resizeTimerID == null) {
		         resizeTimerID = window.setTimeout(function() {
		             resizeTimerID = null;
		             tl.layout();
		         }, 500);
		     }
		 }
			
	</script>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>PDM - Portal da Música</title>
	<link rel="stylesheet"	href="css/template_css.css"	type="text/css">
	<link rel="shortcut icon" href="imagens/favicon.ico">
</head>

<body style="font-size: 100%;" onload='onLoad();' onresize = 'onResize();'>
	<div id="all">
		<div id="cabecalho">
			<div id="shortlinks">
				<ul>
					<li><a title="Ir para página de e-mail da unb" target="_blank"
						href="https://webmail.unb.br/">UnB Webmail</a> |</li>
					<li><a title="Ir para página de e-mail dos alunos"
						href="http://www.aluno.unb.br/">Aluno Webmail</a> |</li>
				</ul>
			</div>

		<div id="topo_geral">
			<div id="topo"></div>
			<div id="logo"></div>
		</div>

		<div id="top">
			<div id="menucenter">
				<table style="margin: 0pt auto;" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td class="menu_m">
								<div id="topnavi" align="left">
									<ul>
										<table class="moduletable" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td>
														<link rel="stylesheet" type="text/css" href="css/ddlevelsmenu-base.css">
															<link rel="stylesheet" type="text/css"	href="css/ddlevelsmenu-topbar.css">
																<link rel="stylesheet" type="text/css" href="css/ddlevelsmenu-sidebar.css">
																	<script type="text/javascript" src="js/ddlevelsmenu.js"></script>
																	<div id="ddtopmenubar" class="mattblackmenu">
																		<ul class="menu">
																			<li id="current" class="active item1">
																				<a href="index.php"> 
																					<span>página inicial</span> 
																				</a>
																			</li>
																			<li id="quem_somos" class="item183">
																				<a href="index.php"> 
																					<span>quem somos</span> 
																				</a>
																			</li>
																			<li id="contato" class="item184">
																				<a href="index.php"> 
																					<span>contato</span> 
																				</a>
																			</li>
																			<li id="acesso" class="item182">
																				<a href="src/administrador.php" target='blank'>
																							<span>acesso</span> 
																				</a>
																			</li>
								
																		</ul>
																	</div>
																	<script type="text/javascript">
																		ddlevelsmenu
																				.setup(
																						"ddtopmenubar",
																						"topbar")
																	</script>
													</td>
												</tr>
											</tbody>
										</table>
									</ul>
								</div></td>
						</tr>
					</tbody>
				</table>
			</div>
						<div class="clr"></div>
		</div>
		<div id="middle"></div>

		<div id="header">
			<table class="moduletable" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div align="center">
								<noscript>Para visualizar este menu o JavaScript deve estar habilitado !</noscript>
								<div id='menu-timeline' style='height: 153px; width: 741px;'></div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

			<div id="sitename">
				<p></p>
			</div>

		</div>
		<div class="center">
			<div id="wrapper">
				<div id="content">
					<div id="leftmenu">
						<div class="module_menu">
							<div>
								<div>
									<div>
										<table width="100%" border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td><a
														href="#"
														class="mainlevel">Gêneros</a></td>
												</tr>
												<tr>
													<td><a
														href="#"
														class="mainlevel">Autores</a></td>
												</tr>
												<tr>
													<td><a
														href="#"
														class="mainlevel">Obras</a></td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<div id="main">
						<table class="blog" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td valign="top">
										<div>
											<table class="contentpaneopen">
												<tbody>
													<tr>
														<td colspan="2" valign="top">
