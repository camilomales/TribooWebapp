$(document).ready(function() {
  	$.ajaxSetup({ cache: true });
  	$.getScript('//connect.facebook.net/es_LA/sdk.js', function(){
    	FB.init({
      	appId: '899793666743142',
      	version: 'v2.4' 
    	});     
	$('#loginbutton,#feedbutton').removeAttr('disabled');
		FB.getLoginStatus(updateStatusCallback);
  	});
});