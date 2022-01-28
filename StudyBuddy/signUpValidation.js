function validateForm() {
	if (document.forms["regForm"]["username"].value == "") {
	  console.log('name err');
	  let err1= document.getElementById('nameErr');
		err1.innerHTML="Namespace cannot be empty";
		err1.style.color="red";
	  return false;
	}
	 else if (document.forms["regForm"]["firstname"].value == "") {

		let err2= document.getElementById('firstErr');
		err2.innerHTML="* This field cannot be empty";
		err2.style.color="red";
		return false;
	    }

          else if (document.forms["regForm"]["lastname"].value == "") {
             
		let err2= document.getElementById('lastErr');
		err2.innerHTML="* This field cannot be empty";
		err2.style.color="red";
		return false;
	    }

          else if (document.forms["regForm"]["password"].value == "") {
             
		let err2= document.getElementById('passErr');
		err2.innerHTML="* This field cannot be empty";
		err2.style.color="red";
		return false;
	    }

          else if (document.forms["regForm"]["email"].value == "") {
             
		let err2= document.getElementById('emailErr');
		err2.innerHTML="* This field cannot be empty";
		err2.style.color="red";
		return false;
	    }
      
    }
