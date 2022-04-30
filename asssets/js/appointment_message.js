function message()
{
    var email = document.getElementById("email").value;
    var type = document.getElementById("type").value;
    var date = document.getElementById("date").value;

    if(email !="" && type!="" && date !="")
    {
        alert("regsitered successfully");
    }
}