function message()
{
    var name = document.getElementById("name").value;//taking value from form
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").value;
    var contact = document.getElementById("contact").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;

    //checking fields are not empty
    if(email !="" && name!="" && dob !="" && gender!="" && contact!="" && address!="")
    {
        alert("patient data of "+name+" has been updated");//alert message with name
    }
}