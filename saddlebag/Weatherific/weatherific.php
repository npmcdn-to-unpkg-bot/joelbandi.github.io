<!doctype html>
<html>
<head>
<title>My First Webpage</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    
    
    
<style>
html, body {
height:100%;
}
.container {
 background-image:url("assets/weatherific.jpg");
width:100%;
height:100%;
 background-size:cover;
 background-position:center;
 padding-top:100px;
}
.center {
    text-align:center;
}
.white {
color:white;
}
p {
 padding-top:15px;
 padding-bottom:15px;
}
button {
 margin-top:20px;
 margin-bottom:20px;
}
.alert {
 margin-top:20px;
display:none;
    width: 75vh;
}
</style>
    
    
</head>
<body>
<div class="container">
    
<div class="row">
<div class="col-md-6 col-md-offset-3 center">
<h1 class="center white" style="font-size:50px;font-family: 'Lobster', cursive;">Weatherific</h1>
<p class="lead center white">Weather forecasts simplified!</p>
<form>
<div class="form-group">
<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Los angeles or Paris" />
</div>
<button id="findMyWeather" class="btn btn-success btn-lg">Find my weather!</
button>
</form>
</div>
</div>
    
    
    <center>
    <div id="success" class="alert alert-success">Success!</div>
<div id="fail" class="alert alert-danger">Could not find weather data for that
city. Please try again.</div>

        
        <div id="noCity" class="alert alert-danger">Please enter a city!</div>
    </center>

        
    <footer style="position:fixed;bottom:0;left:0;right:0">     
  <center><span style="paddin-top:75px;color:white;font-size:10px" >Created by Joel Bandi with HTML,CSS, JQuery, Bootstrap and AJAX. <br> email me : jbandi@uci.edu</span></center> 
</footer>
</div>

    <script>

    $("#findMyWeather").click(function(event) {

 event.preventDefault();

 $(".alert").hide();

 if ($("#city").val()!="") {

 $.get("scraper.php?city="+$("#city").val(),
function(data) {


 if (data == "") {
 
 $("#fail").fadeIn();


 } else {
     
 $("#success").html(data).fadeIn();
 
 
 }


 });

 } else {

 $("#noCity").fadeIn();
 }



 });
</script>
</body>
</html>
