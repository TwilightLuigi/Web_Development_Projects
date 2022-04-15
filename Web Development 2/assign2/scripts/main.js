"use strict";

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
	//document.getElementById("time").innerHTML = '<option value="2pm">2:00pm</option><option value="5">5:00pm</option><option value="8">8:00pm</option>';
	document.getElementById("rad1").onclick = timeChange;
	document.getElementById("rad2").onclick = timeChange;
	document.getElementById("rad3").onclick = timeChange;
	document.getElementById("rad4").onclick = timeChange;	
};




		
		