<<<<<<< HEAD
var shown = false;
function showhideEmail(){
	if(shown){
		document.getElementById('email').innerHTML = "Show my Email";
		shown = false;
	}
	else{
		var myemail = "<a href ='mailto:nagpalvv" + "@" + "outlook.com'>nagpalvv" + "@" + "outlook.com</a>";
		document.getElementById('email').innerHTML = myemail;
		shown = true;
	}
=======
 var shown = false;

 function showhideEmail(){

 	if(shown)
 	{
 		document.getElementById('email').innerHTML = "Show my email";
 		shown = false;
 	}
 	else
 	{
 		var myemail = "<a href='mailto:nagpalvv-waph"+"@"+"outlook.com'>nagpalvv-waph"+"@"+"outlook.com</a>";
 		document.getElementById('email').innerHTML = myemail;
 		shown = true;
 	}
>>>>>>> 58b27128c27a77b89816bfd196fde971908144d7
}