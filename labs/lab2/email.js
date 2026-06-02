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
}