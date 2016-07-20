<!doctype html>
<html>
<head>
	<title>Notificaciones</title>
	<!-- visita el blog http://3nr1c.blogspot.com para resolver tus dudas sobre programación y desarrollo web! -->
	<!--<script src="jquery.js"></script>-->
</head>
<body>
	<a href="javascript:;" id="activar">Activar notificaciones</a>
	<a href="javascript:;" id="test">Probar notificaciones</a>
</body>

<script>
function testNotifications(){
	//nos devuelve true si podemos usar notificaciones
	if(window.webkitNotifications || window.notifications || Notification)
		return true;
	return false;
}

function checkPermission(){
	if(window.webkitNotifications && window.webkitNotifications.checkPermission() == 0){
		return true;
	}else if(Notification && Notification.permission == 'granted'){
		return true;
	}
	return false;
}

function requestPermission(){
	//pedimos permiso para mostrar notificaciones
	if(window.webkitNotifications && window.webkitNotifications.checkPermission() != 0){//Chrome
		window.webkitNotifications.requestPermission();
	}else if(Notification && Notification.permission != 'granted'){//Firefox
		Notification.requestPermission();
	}
}

function newNotification(title, content, img_uri){
	if(window.webkitNotifications && checkPermission()){
		var notification = window.webkitNotifications.createNotification(
			img_uri,
			title,
			content
		);
		return notification;
	}else if(Notification && checkPermission()){
		return {
			show: function(){
				new Notification( title,
				{
					body: content,
					iconUrl: img_uri
				});
			}
		}
	}
}

document.querySelector('#activar').addEventListener('click',function(e){
	if(testNotifications()){
		requestPermission(function(){
			
		});
	}
}, false);

document.querySelector('#test').addEventListener('click',function(e){
	newNotification('Hola mundo!', 'Estoy probando las notificaciones web',
	'test.png').show();
});

$('document').ready(function(){
	/*
	newNotification('Hola mundo!', 'Estoy probando las notificaciones web',
	'test.png').show();*/
});
</script>

</html>