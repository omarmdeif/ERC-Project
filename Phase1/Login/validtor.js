function validate_form ( ){
    var valid=true;
    var password =document.getElementById("registerPassword").value;
    var confirmPassword =document.getElementById("registerConfrimPassword").value;
    if(password != confirmPassword){
        alert("Passwords Doesn't match");
        valid=false;
    }
    return valid;
}