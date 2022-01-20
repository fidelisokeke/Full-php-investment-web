const alertDiv = document.querySelector('#alertDiv');
const waitSpinner = document.querySelector('#waitSpinner');
// hide both the alertDiv and spinner until when needed
alertDiv.style.display = 'none';
waitSpinner.style.display = 'none';
const signUpForm = document.forms.signUpForm;

// handle sign-up form submit
const handleSignUp = (event) => {
    event.preventDefault();
    // check recaptcha before processing anything
    const response = grecaptcha.getResponse();
    if(response.length == 0){
        alertDiv.style.display = 'block';
        alertDiv.innerHTML = 'Please verify the captcha!';
        return 0;
    }
    // show spinner before sending request to the server
    waitSpinner.style.display = 'block';
    
    // create formData object
    const formData = new FormData();
    
    formData.append('username', signUpForm.username.value);
    formData.append('email', signUpForm.email.value);
    formData.append('password', signUpForm.password.value);
    formData.append('passwordConfirm', signUpForm.passwordConfirm.value);
    formData.append('country', signUpForm.country.value);
    formData.append('referee', signUpForm.referee.value);
    formData.append('signup', '');
    
    
    // send a post request to the server
    (async () => {
        const rawResponse = await fetch('/processes/auth.php', {
            method: 'POST',
            body: formData
        });
        const content = await rawResponse.json();
        console.log(content);
        // stop the progress bar
        waitSpinner.style.display = 'none';
        // check if there is an error in the response
        if (content.error) {
            alertDiv.style.display = 'block';
            alertDiv.innerHTML = content.message;
        } else {
            // clear input values
            signUpForm.username.value = '';
            signUpForm.email.value = '';
            signUpForm.password.value = '';
            signUpForm.passwordConfirm.value = '';
            signUpForm.country.value = '';
            // pop a success message
            Swal.fire({
              icon: 'success',
              title: 'Success',
              html: `${content.message}, Verify your email address to continue.`
            })
        }
    })();
}
signUpForm.addEventListener('submit', handleSignUp);