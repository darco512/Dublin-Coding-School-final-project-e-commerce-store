document.getElementById('sign-up-email').oninput = function() {registrationEmailValidation ()};
document.getElementById('sign-up-pass').oninput = function() {passwordValidation ()};
document.getElementById('password-confirmation').oninput = function() {passwordOneness ()};

const setError = (element, text, button ) => {
    element.innerText = text;
    element.classList.remove('invisible');
    button.disabled = true;
}

const removeError = (element) => {
    element.innerText = '';
    element.classList.add('invisible');
}
    //Checking Registraion Email Input
function registrationEmailValidation () {
    const email = document.getElementById('sign-up-email').value;
    const passwordConfirmation = document.getElementById('password-confirmation').value;
    const password = document.getElementById('sign-up-pass').value;
    const emailError = document.getElementById('email-error');
    const button = document.getElementById('register-submit');
    var passwordPatern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!email) {
        setError(emailError, 'Email is required', button);
    } else if (!email.match(emailPattern)) {
        setError(emailError, "Please provide a valid email" , button);
    } else {
        removeError(emailError);
    }

        //If no error, making button unable

        if(email !== '' && email.match(emailPattern) && password.match(passwordPatern) && passwordConfirmation.match(password) && password.match(passwordConfirmation)) {
            button.disabled = false;
        }
}

    //Checking Registraion Password Input
function passwordValidation () {
    const email = document.getElementById('sign-up-email').value;
    const passwordConfirmation = document.getElementById('password-confirmation').value;
    const password = document.getElementById('sign-up-pass').value;
    const passwordError = document.getElementById('password-error');
    const button = document.getElementById('register-submit');
    var passwordPatern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!password.match(passwordPatern)) {
        setError(passwordError, "Password must have at least 8 characters, 1 letter and 1 number", button);
    } else {
        removeError(passwordError);
    }

        //If no error, making button unable

        if(email !== '' && email.match(emailPattern) && password.match(passwordPatern) && passwordConfirmation.match(password) && password.match(passwordConfirmation)) {
            button.disabled = false;
        }
}


    //Checking Registraion Password Input
function passwordOneness () {
    const email = document.getElementById('sign-up-email').value;
    const passwordConfirmation = document.getElementById('password-confirmation').value;
    const password = document.getElementById('sign-up-pass').value;
    const passwordConfirmationError = document.getElementById('password-confirmation-error');
    const button = document.getElementById('register-submit');
    var passwordPatern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!passwordConfirmation.match(password) || !password.match(passwordConfirmation)) {
        setError(passwordConfirmationError, "This field value must be the same as Password", button);
    } else {
        removeError(passwordConfirmationError);
    }

        //If no error, making button unable

    if(email !== '' && email.match(emailPattern) && password.match(passwordPatern) && passwordConfirmation.match(password) && password.match(passwordConfirmation)) {
        button.disabled = false;
    }
}
