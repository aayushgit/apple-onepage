   
   function validateForm(){
	var x = document.forms["joinus"]["name"].value;
	var y = document.forms["joinus"]["email"].value;
	var z = document.forms["joinus"]["password"].value;
	if(validateName()) 
	{
			if(validateEmail())
			{
				if(validatePassword())
				{
					return true;
				}
			}
	}
	
} 

function validateName(){
	var x = document.joinus.name.value;
	regex=/^[a-zA-Z]+$/;
	if(x==" " && !x.match(regex))
		{
			alert("Invalid/Empty Input Detected for Name");
			return false;
		}
	return true;
		
}

function validateEmail(){
	var y = document.forms["joinus"]["email"].value;
	
	if(y==" " && y.indexOf("@")-y.indexOf(".")<5 && y.indexOf("@")<1)
		{
			alert("Invalid/Empty Input Detected for Email");
			return false;
		}
	return true;
}

function validatePassword(){
	var z = document.forms["joinus"]["password"].value;
	if(z==" " && z.length<6 )
		{
			alert("Invalid/Empty Input Detected for Password");
			return false;
		}
	return true;
		
}





