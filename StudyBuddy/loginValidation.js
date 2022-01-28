function validateForm() {
	if (document.forms["myForm"]["username"].value == "") {
	  console.log('name err');
	  let err1= document.getElementById('nameErr');
		err1.innerHTML="Namespace cannot be empty";
		err1.style.color="red";
		//err2.display="hidden";
	  return false;
	}
	 else if (document.forms["myForm"]["password"].value == "") {
		console.log('pass err');
		let err2= document.getElementById('passErr');
		err2.innerHTML="password cannot be empty";
		err2.style.color="red";
		//err1.display="hidden";
		return false;
	    }
    }
