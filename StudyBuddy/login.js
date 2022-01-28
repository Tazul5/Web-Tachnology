function validateForm() {
	const username = document.getElementById('username');
	const password = document.getElementById('password');
	const err = document.getElementById('err');
	let name = username.value;
	let pass = password.value;
	if (name === "" || pass ==="") {
		err.innerText='Please, fill out all the input fields!';
		setTimeout(function(){
			err.innerText=''; 
			}, 3000);
		return false;
	}
	else{
		return true;
	}
	
	}



// function checkInputs() {
// 	const form = document.getElementById('regForm');
// const username = document.getElementById('username');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// //const password2 = document.getElementById('password2');

// let des = false;
// 	// trim to remove the whitespaces
// 	const usernameValue = username.value.trim();
// 	const emailValue = email.value.trim();
// 	const passwordValue = password.value.trim();
// 	//const password2Value = password2.value.trim();
	
// 	if(usernameValue == '') {
// 		//setErrorFor(username, 'Username cannot be blank');

//             alert("name blank");
//             console.log("NAM nai");
// 			return des;

// 	} else {
// 		des = true;
// 		return des;
// 	}
	
	// if(emailValue === '') {
	// 	setErrorFor(email, 'Email cannot be blank');
	// } else if (!isEmail(emailValue)) {
	// 	setErrorFor(email, 'Not a valid email');
	// } else {
	// 	setSuccessFor(email);
	// }
	
	// if(passwordValue === ''|| passwordValue.length<8) {
	// 	//setErrorFor(password, 'Password cannot be blank');
    //         alert("pass blank");
	// } else {
	// 	//setSuccessFor(password);
	// }
	
	// if(password2Value === '') {
	// 	setErrorFor(password2, 'Password2 cannot be blank');
	// } else if(passwordValue !== password2Value) {
	// 	setErrorFor(password2, 'Passwords does not match');
	// } else{
	// 	setSuccessFor(password2);
	// }
//}

// function setErrorFor(input, message) {
// 	const formControl = input.parentElement;
// 	const small = formControl.querySelector('small');
// 	formControl.className = 'form-control error';
// 	small.innerText = message;
// }

// function setSuccessFor(input) {
// 	const formControl = input.parentElement;
// 	formControl.className = 'form-control success';
// }
	
// function isEmail(email) {
// 	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }