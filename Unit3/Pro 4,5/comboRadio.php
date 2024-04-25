<html>
<body>
<head>
<style>
   body{
     font-family: Arial;
     background-color:#f4f4f4; 
   }
   form{
     width:75%;
	 height:20%;
     background-color:lightgrey;
     padding:20px;
   }
  label{
   font-weight:bold;
   color:black;
  }
</style>
<script>
function userval(){
	var xmlhttp = new XMLHttpRequest();
		
	var name= document.getElementById("combo").value;
	var semester = document.querySelector('input[name="sem"]:checked').value;
	var subject = document.querySelectorAll('input[name="sub"]:checked');
	var subValues = [];
	subject.forEach(function(sub){
		subValues.push(sub.value);
	});
	xmlhttp.open("GET","comboRadiovalue.php?combo=" +name+ "&sem=" +semester+ "&s=" +subValues.join(','),true);
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
		 document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.send();
}

</script>
<div id="myDiv">
<center>
<form>
<label>Selection</label><br><br>

Select Product <select id="combo" onchange="userval()">
               <option value="Select">Select</option>
			   <option value="Pendrive">Pendrive</option>
			   <option value="Laptop">Laptop</option>
			   <option value="disk">disk</option></Select>


<br><br>
<label>Select Subjects:</label>
<input type="checkbox" name="sub" id="sub1" value="Java" onclick="userval()">Java
<input type="checkbox"  name="sub" id="sub2" value="Python" onclick="userval()">Python
<input type="checkbox" name="sub" id="sub3" value="Php" onclick="userval()">Php
<input type="checkbox" name="sub" id="sub4" value="Html" onclick="userval()">Html
<input type="checkbox" name="sub" id="sub5" value="JavaScript" onclick="userval()">JavaScript
<input type="checkbox" name="sem" id="sub6" value="C++" onclick="userval()">C++

<br><br>		
<label>Select Semester:</label>		
<input type="radio" name="sem" id="sem1" value="1" onclick="userval()">1
<input type="radio"  name="sem" id="sem2" value="2" onclick="userval()">2
<input type="radio" name="sem" id="sem3" value="3" onclick="userval()">3
<input type="radio" name="sem" id="sem4" value="4" onclick="userval()">4
<input type="radio" name="sem" id="sem5" value="5" onclick="userval()">5
<input type="radio" name="sem" id="sem6" value="6" onclick="userval()">6

</center>
</form>
</div>
</head>
</body>
</html>