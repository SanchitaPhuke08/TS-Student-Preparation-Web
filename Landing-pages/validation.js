
function validateForm() {
  let fname = document.registerForm.fname.value;
  let lname = document.registerForm.lname.value;
  let residenceAddress = document.registerForm.residenceAddress.value;
  let contact = document.registerForm.contact.value;
  let age = document.registerForm.age.value;
  let email = document.registerForm.email.value;
  let password = document.registerForm.password.value;

  if (fname === null || fname === "") {
    document.getElementById('fname').innerHTML = "Please fill the first name field.";
    document.registerForm.fname.focus();
    return false;
  }
  else{
    document.getElementById('fname').innerHTML = "";
  }

  if (lname === null || lname === "") {
    document.getElementById('lname').innerHTML = "Please fill the last name field.";
    document.registerForm.lname.focus();
    return false;
  }
  else{
    document.getElementById('lname').innerHTML = "";
  }
  
  if (residenceAddress === null || residenceAddress === "") {
    document.getElementById('residenceAddress').innerHTML = "Please fill the residence address field.";
    document.registerForm.residenceAddress.focus();
    return false;
  }
  else{
    document.getElementById('residenceAddress').innerHTML = "";
  }


  if (contact === null || contact === "") {
    document.getElementById('contact').innerHTML = "Please fill the contact number field.";
    document.registerForm.contact.focus();
    return false;
  }
  else{
    document.getElementById('contact').innerHTML = "";
  }

  if (contact.length != 10) {
    document.getElementById('contact').innerHTML = "Contact number must be 10 digit.";
    document.registerForm.contact.focus();
    return false;
  }
  else{
    document.getElementById('contact').innerHTML = "";
  }

  if (age === null || age === "") {
    document.getElementById('age').innerHTML = "Please fill the age field.";
    document.registerForm.age.focus();
    return false;
  }
  else{
    document.getElementById('age').innerHTML = "";
  }

  if (age < 15 || age > 100) {
    document.getElementById('age').innerHTML = "Age must be greater than 15 and less than 100.";
    document.registerForm.age.focus();
    return false;
  }
  else{
    document.getElementById('age').innerHTML = "";
  }

  if (document.getElementById('gender1').checked == false && document.getElementById('gender2').checked == false && document.getElementById('gender3').checked == false ) {
    document.getElementById("genderOptions").innerHTML = "You have not selected any gender.";
    return false;
  }
  else{
    document.getElementById('genderOptions').innerHTML = "";
  }

  if (email === null || email === "") {
    document.getElementById('email').innerHTML = "Please fill the email field.";
    document.registerForm.email.focus();
    return false;
  }
  else{
    document.getElementById('email').innerHTML = "";
  }

  if (password === null || password === "") {
    document.getElementById('password').innerHTML = "Please fill the password field.";
    document.registerForm.password.focus();
    return false;
  }
  else{
    document.getElementById('password').innerHTML = "";
  }

  return (true);
}

function emailValidate() {
  let email = new RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
  if (!email.test(document.registerForm.email.value)) {
    document.getElementById('email').innerHTML = "Please fill the valid email.";
    return false;
  }
  else{
    document.getElementById('email').innerHTML = "";
  }
}

function checkPassword()
{
    var pass = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[a-zA-Z!#$%&? "])[a-zA-Z0-9!#$%&?]{8,15}$/;
    if (! pass.test(document.registerForm.password.value)){
      document.getElementById('password').innerHTML = "Password should be min 8 and max 15 characters long and contain at least 1 digit ,1 lower case, 1 upper case, 1 special character.";
      return false;
    }    
  else{
    document.getElementById('email').innerHTML = "";
  }
}
function onlyNumberKey(evt) {        // Only number will be allow to input      
  var ASCIICode = (evt.which) ? evt.which : evt.keyCode
  if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
    return false;
  return true;
}