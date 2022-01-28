function validateForm() {
	if (document.forms["updateForm"]["firstname"].value == "") {
	  
	  let err1= document.getElementById('firstErr');
		err1.innerHTML="Namespace cannot be empty";
		err1.style.color="red";
		//err2.display="hidden";
	  return false;
	}
	 else if (document.forms["updateForm"]["lastname"].value == "") {

		let err2= document.getElementById('lastErr');
		err2.innerHTML="password cannot be empty";
		err2.style.color="red";
		//err1.display="hidden";
		return false;
	    }
    }
