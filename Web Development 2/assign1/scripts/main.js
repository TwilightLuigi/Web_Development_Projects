"use strict";

var verifyInput = function() {	
    
  var name = document.getElementById("name").value.trim();
  var address = document.getElementById("address").value.trim();
  var city = document.getElementById("city").value.trim();
	var zip = document.getElementById("zip").value.trim();
	var validateZip = /^\d{5}$|^\d{5}-\d{4}$/;
  var email = document.getElementById("email").value.trim();
	var emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
	var vaildEmail = emailPattern.test(email);
  var isValid = true;
    
  if (name == "") {
    document.getElementById("name").nextElementSibling.firstChild.nodeValue = "This field is required.";
    isValid = false;
  } 
  else {
    document.getElementById("name").nextElementSibling.firstChild.nodeValue = "";
	}
   
  if (address == "") {
    document.getElementById("address").nextElementSibling.firstChild.nodeValue = "This field is required.";
    isValid = false;
  } 
  else {
    document.getElementById("address").nextElementSibling.firstChild.nodeValue = "";
  }
   
  if (city == "") {
    document.getElementById("city").nextElementSibling.firstChild.nodeValue = "This field is required.";
    isValid = false;
  } 
  else {
    document.getElementById("city").nextElementSibling.firstChild.nodeValue = "";
  }
	
	if(zip == ""){
		document.getElementById("zip").nextElementSibling.firstChild.nodeValue = "This field is required.";
    isValid = false;
	}
	else if (!validateZip.test(zip)) {
		document.getElementById("zip").nextElementSibling.firstChild.nodeValue = "Invalid zipcode";
    isValid = false;
	}
	else {
		document.getElementById("zip").nextElementSibling.firstChild.nodeValue = "";
	}
	
	if(email == ""){
		document.getElementById("email").nextElementSibling.firstChild.nodeValue = "This field is required.";
    isValid = false;
	}
	else if (!vaildEmail){
		document.getElementById("email").nextElementSibling.firstChild.nodeValue = "Invalid email address";
    isValid = false;
  }
	else{
		document.getElementById("email").nextElementSibling.firstChild.nodeValue = "";
	}
  if (isValid == true) {
    document.getElementById("input_form").submit();			
  }
  
};

var clearForm = function(){
		
	document.getElementById("input_form").reset();
	document.getElementById("rad1").checked = true;
	document.getElementById("time").innerHTML = '<option value="2pm">2:00pm</option><option value="5pm">5:00pm</option><option value="8pm">8:00pm</option>';
	document.getElementById("email").nextElementSibling.firstChild.nodeValue = "*";
	document.getElementById("zip").nextElementSibling.firstChild.nodeValue = "*";
	document.getElementById("city").nextElementSibling.firstChild.nodeValue = "*";
	document.getElementById("address").nextElementSibling.firstChild.nodeValue = "*";
	document.getElementById("name").nextElementSibling.firstChild.nodeValue = "*";
};

var timeChange = function(){
	 
	if(this.value == "satFeb8"){
		document.getElementById("time").innerHTML = '<option value="2pm">2:00pm</option><option value="5pm">5:00pm</option><option value="8pm">8:00pm</option>';
	}
	
	if(this.value == "sunFeb9"){
		document.getElementById("time").innerHTML = '<option value="1pm">1:00pm</option><option value="4pm">4:00pm</option>';
	}
	
	if(this.value == "satFeb15"){
		document.getElementById("time").innerHTML = '<option value="2pm">2:00pm</option><option value="5pm">5:00pm</option><option value="8pm">8:00pm</option>';
	}
	
	if(this.value == "sunFeb16"){
		document.getElementById("time").innerHTML = '<option value="1pm">1:00pm</option><option value="4pm">4:00pm</option>';
	}
	
};

window.onload = function() {
	document.getElementById("go").onclick = verifyInput;
  document.getElementById("rad1").checked = true;
	document.getElementById("time").innerHTML = '<option value="2pm">2:00pm</option><option value="5">5:00pm</option><option value="8">8:00pm</option>';
	document.getElementById("rad1").onclick = timeChange;
	document.getElementById("rad2").onclick = timeChange;
	document.getElementById("rad3").onclick = timeChange;
	document.getElementById("rad4").onclick = timeChange;
	document.getElementById("clear").onclick = clearForm;	
};




		
		