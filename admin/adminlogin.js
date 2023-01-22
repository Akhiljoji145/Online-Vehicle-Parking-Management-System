function validate()
{
	var x=document.forms["admin"]["name"].value;
	var y=document.forms["admin"]["pass"].value;
	if(x=="" )
	{
		alert("enter the username");
		return false;
	}
	if(y=="")
	{
		alert("enter the password");
		return false;

	}
	
	
}