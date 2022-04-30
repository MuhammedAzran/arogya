function message()
{
    var name = document.getElementById("name").value;
    var dob = document.getElementById("dob").value;
    var gender = document.getElementById("gender").value;
    var contact = document.getElementById("contact").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;

    if(email !="" && name!="" && dob !="" && gender!="" && contact!="" && address!="")
    {
        alert("regsitered successfully");//alert box
    }
}