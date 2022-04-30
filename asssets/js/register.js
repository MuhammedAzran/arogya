function validate()
{
    var password = document.getElementById("password").value;//taking value from form
    var confirmpassword = document.getElementById("confirm_password").value;
    if(password != confirmpassword)
    {
        alert("password do not match");
        return false;//do not return yet, there is another condition
    }
    if(password.length<6 && password !="")//check all conditions
    {
        
        alert("password is weak");
        return false;
    }
    alert("password updated");
    return true;

    
}