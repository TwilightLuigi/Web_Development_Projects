$(document).ready(function() {

	$("#quiz").click( function() {
     var radioButtonValue = $("input[name=q]:checked").val();
		 var numanswercorrect= 0;
      if (radioButtonValue == null){
				$('#q').html("You have not made  a choice");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else if(radioButtonValue == "a"){
				$('#q').html("Sorry that answer is incorrect");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else{
				numanswercorrect++;
				$('#score').html("You scored " + numanswercorrect + " out of 5");		
				$('#q').html ("");
			}
			
		var radioButtonValue2 = $("input[name=q2]:checked").val();
			if (radioButtonValue2 == null){
				$('#q2').html("You have not made  a choice");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else if(radioButtonValue2 == "a"){
				$('#q2').html("Sorry that answer is incorrect");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else{
				numanswercorrect++;
				$('#score').html("You scored " + numanswercorrect + " out of 5");		
				$('#q2').html ("");
			}
			
		var radioButtonValue3 = $("input[name=q3]:checked").val();
			if (radioButtonValue3 == null){
				$('#q3').html("You have not made  a choice");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else if(radioButtonValue3 == "a"){
				$('#q3').html("Sorry that answer is incorrect");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else{
				numanswercorrect++;
				$('#score').html("You scored " + numanswercorrect + " out of 5");		
				$('#q3').html ("");
			}
			
		var radioButtonValue4 = $("input[name=q4]:checked").val();
			if (radioButtonValue4 == null){
				$('#q4').html("You have not made  a choice");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else if(radioButtonValue4 == "a"){
				$('#q4').html("Sorry that answer is incorrect");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else{
				numanswercorrect++;
				$('#score').html("You scored " + numanswercorrect + " out of 5");		
				$('#q4').html ("");
			}
			
		var radioButtonValue5 = $("input[name=q5]:checked").val();
			if (radioButtonValue5 == null){
				$('#q5').html("You have not made  a choice");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else if(radioButtonValue5 == "a"){
				$('#q5').html("Sorry that answer is incorrect");
				$('#score').html("You scored " + numanswercorrect + " out of 5");
			}else{
				numanswercorrect++;
				$('#score').html("You scored " + numanswercorrect + " out of 5");		
				$('#q5').html ("");
			} 
		}	
	);	
}); 