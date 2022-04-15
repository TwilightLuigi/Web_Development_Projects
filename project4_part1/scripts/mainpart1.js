"use strict";

var checkAnswer = function() {
		var choices = document.getElementsByName("q");
		var choices2 = document.getElementsByName("q2");
		var choices3 = document.getElementsByName("q3");
		var choices4 = document.getElementsByName("q4");
		var choices5 = document.getElementsByName("q5");
	  var radioButtonValue;
		var radioButtonValue2;
		var radioButtonValue3;
		var radioButtonValue4;
		var radioButtonValue5;
	  var numanswerscorrect =0;
	  
	  for (var i=0; i< choices.length; i++) {
		  if (choices[i].checked) {
			  radioButtonValue = choices[i].value;
		  }
	  }
		
		for (var j=0; j< choices.length; j++){
			if (choices2[j].checked){
				radioButtonValue2 = choices2[j].value;
			}
		}	
		
		for (var h=0; h< choices.length; h++){
			if (choices3[h].checked){
				radioButtonValue3 = choices3[h].value;
			}
		}
		
		for (var k=0; k< choices.length; k++){
			if (choices4[k].checked){
				radioButtonValue4 = choices4[k].value;
			}
		}
		
    for (var a=0; a< choices.length; a++){
			if (choices5[a].checked){
				radioButtonValue5 = choices5[a].value;
			}
		}	
		
		if (radioButtonValue == null){
		  document.getElementById("q").innerHTML = "You have not made a choice";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else if(radioButtonValue== "a"){
		  document.getElementById("q").innerHTML = "Sorry that answer is not correct";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else{
			numanswerscorrect++;
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
			document.getElementById("q").innerHTML = "";
		}
		
		if (radioButtonValue2 == null){
		  document.getElementById("q2").innerHTML = "You have not made a choice";
		  document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5"; 
		}else if(radioButtonValue2== "a"){
		  document.getElementById("q2").innerHTML = "Sorry that answer is not correct";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else{
			numanswerscorrect++;
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
			document.getElementById("q2").innerHTML = "";
		}
		
		if (radioButtonValue3 == null){
		  document.getElementById("q3").innerHTML = "You have not made a choice";
		  document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else if(radioButtonValue3== "a"){
		  document.getElementById("q3").innerHTML = "Sorry that answer is not correct";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else{
			numanswerscorrect++;
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
			document.getElementById("q3").innerHTML = "";
		}
		
		if (radioButtonValue4 == null){
		  document.getElementById("q4").innerHTML = "You have not made a choice";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else if(radioButtonValue4== "a"){
		  document.getElementById("q4").innerHTML = "Sorry that answer is not correct";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else{
			numanswerscorrect++;
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
			document.getElementById("q4").innerHTML = "";
		}
		
		if (radioButtonValue5 == null){
		  document.getElementById("q5").innerHTML = "You have not made a choice";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else if(radioButtonValue5== "a"){
		  document.getElementById("q5").innerHTML = "Sorry that answer is not correct";
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
		}else{
			numanswerscorrect++;
			document.getElementById("score").innerHTML = "You scored " + numanswerscorrect + " out of 5";
			document.getElementById("q5").innerHTML = "";
		}
}; 

window.onload = function() {
  document.getElementById("go").onclick = checkAnswer;
};