/**
 * 
 */

function validate()
{
isValidName=true;
isValidPwd=true;
idName=document.getElementById("nameId");
idName.onblur=function(){
	var errorLabel=document.getElementById("eMName");
	if (idName.value=="")
	{
	errorLabel.innerHTML="Username can not be empty";
	isValidName=false;
	}
	
	else if(/[^A-Za-z0-9-_]/.test(idName.value))
	{
	errorLabel.innerHTML="Username can only have letters, digits, hyphen and underscores.";
	isValidName=false;
	}
	else
	{
		errorLabel.innerHTML="";
		isValidName=true;
	}
}

idPwd=document.getElementById("pwdId");
idPwd.onblur=function()
{
	var errorLabel2=document.getElementById("eMPwd");
	if (idPwd.value.length<5)
	{
	      errorLabel2.innerHTML="Password can not be less than 5 characters.";
	      isValidPwd=false;
	}	
	else
	{
		errorLabel2.innerHTML="";
		isValidPwd=true;
	}
	
}
}
function allValid()
{
	if(isValidName && isValidPwd)
		return true;
	else
		return false;
}


