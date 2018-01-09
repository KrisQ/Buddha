<!doctype html>

<html>
<head>
    <title>Restaurant Buddha</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
    
    


    
    
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  
	  


	<link rel="stylesheet" href="css/flatly.css">
	
	<link rel="stylesheet" href="css/flatly.min.css">



	
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
   	<link rel="stylesheet" type="text/css" href="styles.css" />
    
    
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  

  
  $(function() {
  
    $( ".datepicker" ).datepicker();
  });
  </script>
    
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUoForl2zyfZlbalpaKU6Y0G0BYyXxGng">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: 48.836027, lng: 2.347027},
          zoom: 16
        };
        var map = new google.maps.Map(document.getElementById('carte'),
            mapOptions);
        
        var marker = new google.maps.Marker({
  	   position: { lat: 48.836027, lng: 2.347027},
       map: map,
       title: 'Restaurant Buddha!'
	  });

            
      }
      
      	
      	
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
    <script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<script type="text/javascript"
        src="https://raw.githubusercontent.com/jquery/jquery-ui/master/ui/i18n/datepicker-fr.js">
</script>



  
 
    </head>
    <body>
 
 

 