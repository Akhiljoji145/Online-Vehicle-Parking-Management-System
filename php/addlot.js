function validate()
{
	var x=document.forms["form"]["lot_code"].value;
	var y=document.forms["form"]["lot_type"].value;
	var re = new RegExp("/^AS00.*$/");
    if(x=="")
    {
    	alert("enter the code starting with AS00");
    	return false;
    }
    else if(re.match(x))
    {
    	alert("enter the code starting with AS00");
    	return false;
    }
    if(y=="")
    {
    	alert("select a type");
    	return false;
    }
}