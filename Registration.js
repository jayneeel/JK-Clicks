function fieldcheck()
{
	with(document.forms.register)
	{
		if(fname.value=="" || lname.value=="" || email1.value=="" || pass1.value=="" || pass2.value=="")
		{
			alert("Mandatory fields can't be empty");
		}
		else
		{
			// window.open("photoGrid.html");
		}
	}
}

function emailcheck()
{
	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.register.email1.value))
 	{
    	alert("You have entered an invalid email address");
    	return false;
 	} 
}

function passcheck()
{
	with(document.forms.register)
	{
		if(pass1.value!=pass2.value)
		{
			alert("Incorrect Password\nCheck and enter again")
		}
	}
}

function phnocheck(evt)
{
	{
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        {
            alert("Invalid Phone Number enter only Number");
            return false;
        }
        return true;
	}
}

function OpenWin()
{
	Window.open("width=300,height=400");
}