<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1 //EN" "http://ww.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
	</head>
	
	<body onload='onLoad();' onresize = 'onResize();'>
		<div id='all'>
			<!-- Começo do topo da página -->
			<div id='top'>
				<noscript>Para visualizar este menu o JavaScript deve estar habilitado !</noscript>
				<div id='menu-timeline' style='height: 200px; width: 700px;'></div>
			</div>
			<!-- Final do topo da página -->
			<!-- Começo do corpo da página -->
			<div id='body'></div>
			<!-- Final do corpo da página -->
			<!-- Início do rodapé da página -->
			<div id='footer'></div>
			<!-- Final do rodapé da página -->
		</div>
	</body>
</html>