<html>
<head>
  <title>Pro 8</title>
  <style>
   body{
     font-family: Arial;
     background-color:#f4f4f4; 
   }
   form{
     width:50%;
     background-color:lightgrey;
     padding:20px;
   }
  label{
   font-weight:bold;
  }
</style>
</head>
<body>
<center>
  <h1>JG College of Computer Application</h1>
  <h2>Student Registration Form </h2>
  
   <script>
 
    function varifystuid(){ 
	   var xmlhttp = XMLHttpRequest;
	   /*if(window.XMLHttpRequest){
		   xmlhttp = new XMLHttpRequest();
	   } */
	   var fname = document.getElementById("fname").value;
	   var contact = document.getElementById("contact").value;
	   var email = document.getElementById("email").value;
	   var address = document.getElementById("address").value;
	   
	   xmlhttp.open('GET','validtae_stu.php?fname=' + fname + '&contact' + contact + '&email' + email + '&address' + address, true);
	   xmlhttp.onreadystatechange = function(){
		   if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			   document.getElementById("info").innerHTML = xmlhttp.responseText;
		   }
	   }
	   xmlhttp.send();
	}
	
	function reset(){
		document.getElementById("fname").value = "";
		document.getElementById("contact").value = "";
		document.getElementById("email").value = "";
		document.getElementById("address").value = "";
	}
  </script>
  
  <div id="info">
  <form action="validtae_stu.php">
   <table align="center" border='1'>
     <tr><td>Name :<input type="text" id="fname" name="fname" value=""> </td></tr>
	 <tr><td>Contact No. :<input type="contact" id="contact" name="contact" value=""> </td></tr>
	 <tr><td>Email <input type="text" id="email" name="email" value=""> </td></tr>
	 <tr><td>Address <textarea id="address" name="address" ></textarea> </td></tr>
	  <tr><td><input type="submit" name="submit" value="submit" onClick="varifystuid();"> </td>
	   <td><input type="reset" name="reset" value="reset" onClick="reset();"> </td></tr>
  </div>
</center>
</body>
</html>