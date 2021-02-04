import { sendForm } from "./sendform.js";

let langArray = {};

if (document.documentElement.lang === 'en-US')
{
    // Create en
    langArray = {
        validation_msg: {
            nameErr: {
                nameEmptyErr: "Please enter your name."
            },
            emailErr: {
                emailEmptyErr: "Please enter your email.",
                emailInvalidErr: "Please enter a valid email."
            },
            messageErr: {
                messageEmptyErr: "Please enter your message."
            }
        }
    }
}
else if (document.documentElement.lang === 'ru')
{
    // Create ru
    langArray = {
        validation_msg: {
            nameErr: {
                nameEmptyErr: "Пожалуйста, введите ваше имя."
            },
            emailErr: {
                emailEmptyErr: "Пожалуйста, введите ваш адрес электронной почты.",
                emailInvalidErr: "Пожалуйста, введите правильный адрес электронной почты."
            },
            messageErr: {
                messageEmptyErr: "Пожалуйста, введите ваше сообщение."
            }
        }
    }
}

const { validation_msg: errMsg } = langArray;

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

        const input = document.querySelector(".contact-form-text");

        if (isFormValid)
        {  
            sendForm();
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
    const error = formField.querySelector('.error-message');
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
    const error = formField.querySelector('.error-message');
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
        showError(nameEl, errMsg.nameErr.nameEmptyErr);
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
        showError(emailEl, errMsg.emailErr.emailEmptyErr);
    } 
    else if (!isEmailValid(email)) 
    {
        showError(emailEl, errMsg.emailErr.emailInvalidErr);
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
        showError(messageEl, errMsg.messageErr.messageEmptyErr);
    }
    else 
    {
        showSuccess(messageEl);
        valid = true;
    }
    return valid;
}