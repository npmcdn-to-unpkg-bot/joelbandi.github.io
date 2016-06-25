<!doctype html>
<!-- 



THANKS FOR VISITING THIS PAGE> LET ME KNOW HOW I CAN IMPROVE!!!!







-->















<html>
<head>
<title>GeoCoder</title>
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
<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>      
    
<style>
html, body {
height:100%;
}
.container {
 background-image:url("GeoCoder.jpg");
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
font-family: 'Raleway', sans-serif;
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
<h1 class="center white" style="font-size:100px;font-family: 'Raleway', sans-serif;">GeoCoder</h1>
<p class="lead center white">World's postcode finder</p>


<form>
<div class="form-group">
<input type="text" class="form-control" name="address" id="city" placeholder="Eg. some street, some town!" />
</div>
<button id="postcode" class="btn btn-success btn-lg">Find postcode!</
button>
</form>


</div>
</div>
    
    
    <center>
    <div id="success" class="alert alert-success">Success!</div>

<div id="fail" class="alert alert-danger">Coudnt resolve such an address!</div>

        
<div id="noCity" class="alert alert-danger">Please enter an address</div>
    </center>




   <footer style="position:fixed;bottom:0;left:0;right:0">     
  <center><span style="paddin-top:75px;color:white;font-size:10px" >Created by Joel Bandi with HTML,CSS, JQuery, Bootstrap and AJAX. <br> email me : jbandi@uci.edu</span></center> 
</footer>
 
</div>







 <script>
var result = ["status","postcode"];

function processXML(xml){

//alert("xml processing entered ");
result[0] = $(xml).find("status").text();
//alert(result[0]);


if(result[0]=="OK"){

$(xml).find("address_component").each(function(){

		if( $(this).find("type").text() == "postal_code" ){

			result[1] = $(this).find("long_name").text();
			$("#success").html(result[1]);
		$("#success").fadeIn();
			}
		
		});

}
else if(result[0] == "ZERO_RESULTS"){

result[1]="ZERO_RESULTS";
$("#fail").fadeIn();
}
else{

result[0]="UNKNOWN_ERROR";

$("#fail").html("Server error. please try again later :(");
$("#fail").fadeIn();

}


	//alert(result[1]);

}

// begin script here....
var item;
$("#postcode").click(function(event) {

 event.preventDefault();

 $(".alert").hide();

item = $(".form-control").val();


if(item == "")

{
	
	$("#noCity").fadeIn();
}


else

{

	item = item.replace(/ /g,"+");
	//alert(item);
//DEREZZED
	$.ajax({type: "GET",url:"https://maps.googleapis.com/maps/api/geocode/xml?address="+item+"&key=AIzaSyDC9aCWMhiAj9HbC5PiAJaAM31SgEOtam4",dataType: "xml",success: processXML});


}
});



</script>



</body>
</html>
