function validate_form ( ){
    alert("inside func");
    var valid=true;
    var password =document.getElementById("registerPassword").value;
    var confirmPassword =document.getElementById("registerConfrimPassword").value;
    if(password != confirmPassword){
        alert("Passwords Doesn't match");
        valid=false;
    }
    /*
     * We checked if the password == confirmed password only here , but you can validate on any input you desire
     * We didn't validate on other inputs by Javascript as we used HTML5 (required/email...)to validate them
     */
    return valid;
}