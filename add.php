

<html>
<body>
<head>
    <meta name="viewport" content="width=device-width, initial-scale="">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
<script>	
function validateForm() {
	document.getElementById("spn1").innerHTML="";
	document.getElementById("spn2").innerHTML="";
	document.getElementById("spn3").innerHTML="";
	document.getElementById("spn4").innerHTML="";
	
	var n = document.forms["myForm"]["ID"].value;
	if(isNaN(n)) 
	{
		//alert("n="+n);
	document.getElementById("spn1").innerHTML="enter the number";
			return false;
			
	}
   var x = document.forms["myForm"]["Name"].value;
    if (x==null || x=="") {
       document.getElementById("spn2").innerHTML="First name must be filled out";
        return false;
    }
	
	 var s = document.forms["myForm"]["Phone"].value;
	 //alert("s="+s.length);
	 if(isNaN(s)){
		
			//alert("s="+s);
			document.getElementById("spn3").innerHTML="Your Mobile Number must be 1 to 10 Integers";
			//	document.myForm.phone.select();
			return false;
		}
	
	var y = document.forms["myForm"]["Email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
         document.getElementById("spn4").innerHTML="Not a valid e-mail address";
        return false;
    }
   return true;
  } 	
  
</script>
</head> 
      <div class="col-md-2">
      <h2>Data</h2>
	   
	<form method="post" action="" name="myForm" onsubmit="return validateForm()">
          <label for="id">ID:</label>
          <input type="text" class="form-control" name="ID" 
				data-bv
           
		   ><span id="spn1"></span>
       <br>
          <label for="Name">Name:</label>
          <input type="text" class="form-control" name="Name" ><span id="spn2"></span>
       <br>
          <label for="Phone number"> Phone number: </label> 
          <input type="text" class="form-control" name="Phone" ><span id="spn3"></span>
       <br>
          <label for="Email"> E-mail: </label>
          <input type="text" class="form-control" name="Email"  ><span id="spn4"></span>
       <br>
        <input type="submit" id="btn" class="btn btn-primary" name="save" value="save">
		</form>
	   <br>
     
	 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
</body>
</html>


