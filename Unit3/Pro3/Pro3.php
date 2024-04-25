<html>
<head>
<script>
function loadfile(){
	
	var xmlhttp=new XMLHttpRequest();
  
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
	
    xmlhttp.open("GET","UpperCase.php?n=" +name+ "&eid=" +email+ "&mob" + mobile,true);
    xmlhttp.onreadystatechange = function(){
		   if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			   document.getElementById("info").innerHTML = xmlhttp.responseText;
		   }
	   }
	xmlhttp.send();
}
</script>
</head>
<body>
<center>
<div id="info">
<h2>UpperCase Example</h2>

  Enter Name:<input type="text" id="name"><br><br>
  Enter Email:<input type="text" id="email"><br><br>
  Enter Mobile:<input type="text" id="mobile"><br><br>
  <input type="submit" value="Submit" onClick="loadfile()">
 </div>
</center>
</body>
</html>