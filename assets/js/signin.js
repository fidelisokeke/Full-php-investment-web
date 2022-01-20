/**
 * If link contains verification token, 
 * hide the form element and display a message.
 */
const formWrapper = document.querySelector('#formWrapper');
const tokenVerificationElement = document.querySelector('#tokenVerificationElement');
const tokenVerificationSpinner = document.querySelector('#tokenVerificationSpinner');
tokenVerificationSpinner.style.display = 'none';

const getURLparam = (param) => {
    if(param=(new RegExp('[?&]'+encodeURIComponent(param)+'=([^&]*)')).exec(location.search))
    return decodeURIComponent(param[1]);
}

if(getURLparam('token')){
    formWrapper.style.display = 'none';
    tokenVerificationSpinner.style.display = 'block';
    
    // send a post request to the server
    (async () => {
        // create formData object
        const formData = new FormData();
        formData.append('token', getURLparam('token'));
        
        const rawResponse = await fetch('/processes/auth.php', {
            method: 'POST',
            body: formData
        });
        const content = await rawResponse.json();
        console.log(content);
        // stop the progress bar
        tokenVerificationSpinner.style.display = 'none';
        // check if there is an error in the response
        if (content.error) {
            tokenVerificationElement.innerHTML = `<div class="alert alert-danger text-center" role="alert">${content.message}</div>`;
        } else {
            // code block
            tokenVerificationElement.innerHTML = `<div class="alert alert-success text-center" role="alert">${content.message}</div>`;
        }
    })();
}


const alertDiv = document.querySelector('#alertDiv');
const waitSpinner = document.querySelector('#waitSpinner');
// hide both the alertDiv and spinner until when needed
alertDiv.style.display = 'none';
waitSpinner.style.display = 'none';
const signInForm = document.forms.signInForm;

// handle sign-up form submit
const handleSignIn = (event) => {
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
    
    formData.append('email', signInForm.email.value);
    formData.append('password', signInForm.password.value);
    formData.append('signin', '');
    
    
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
            // code block
            window.location.href = 'dashboard/overview.php';
        }
    })();
}
signInForm.addEventListener('submit', handleSignIn);