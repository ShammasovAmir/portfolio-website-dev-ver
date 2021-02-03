const form      = document.getElementById('form');
const nameEl    = document.getElementById('name');
const emailEl   = document.getElementById('email');
const messageEl = document.getElementById('message');


form.addEventListener('submit', function (e)
    {
        // prevent the form from submitting
        e.preventDefault();

        // Validate forms

        let isNameValid    = checkName(),
            isEmailValid   = checkEmail(),
            isMessageValid = checkMessage();


        let isFormValid = isNameValid &&
            isEmailValid &&
            isMessageValid;

        if (isFormValid)
        {  
        // import {} from "./sendform.js";TODO:
        }

    }
);

// Utility functions
const isRequired   = value => value === '' ? false : true;
const isEmailValid = (email) => 
{
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

// Error and succes visual indicators functions

// Error
const showError = (input, message) => 
{
    // get the form-field element
    const formField = input.parentElement;
    const textField = input;
    // add the error class
    textField.classList.remove('success-form');
    textField.classList.add('error-form');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
}

// Success
const showSuccess = (input) => 
{
    // get the form-field element
    const formField = input.parentElement;
    const textField = input;

    // remove the error class
    textField.classList.remove('error-form');
    textField.classList.add('success-form');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}

// Field validating functions

// Name
const checkName = () => 
{

    let valid  = false;
    const name = nameEl.value.trim();

    if (!isRequired(name)) 
    {
        showError(nameEl, 'Please enter your name.');
    }
    else 
    {
        showSuccess(nameEl);
        valid = true;
    }
    return valid;
}

// Email
const checkEmail = () => 
{
    let valid   = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) 
    {
        showError(emailEl, 'Please enter your email.');
    } 
    else if (!isEmailValid(email)) 
    {
        showError(emailEl, 'Please enter a valid email.');
    } 
    else 
    {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
}

// Message
const checkMessage = () => 
{

    let valid  = false;
    const message = messageEl.value.trim();

    if (!isRequired(message)) 
    {
        showError(messageEl, 'Please enter a your message.');
    }
    else 
    {
        showSuccess(messageEl);
        valid = true;
    }
    return valid;
}