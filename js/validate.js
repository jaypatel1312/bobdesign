var dataArray;
var	pageForm;
var formElement;
var totalFormElement;
function initPage()
{
	pageForm = document.forms['formdetail'];
	formElement = pageForm.elements;
	totalFormElement = formElement.length;
}

function resetForm()
{
	initPage();
	for(var i = 0; i < totalFormElement; i++)
	{	
		var p_formElement = formElement[i];
		var elementType = String(p_formElement.type);
		if(elementType == "textarea" || elementType == "text")
			p_formElement.value = "";
		if(elementType == "radio" || elementType == "checkbox")
			p_formElement.checked = false;
	}	
}

function validateForm()
{
	initPage();
	for(var i = 0; i < totalFormElement; i++)
	{	
	
		if(isValidateElement(formElement[i]) == false)
		{
			formElement[i].focus();
			return false;
		}
	}
	return true;
}

function isNumberKey(evt)
{
	 var charCode = (evt.which) ? evt.which : event.keyCode;
	 if ( (charCode > 47 && charCode < 58) || charCode == 43 || charCode == 45 ||charCode<31 )
		return true;
	 return false;
}

function isValidateElement(p_formElement)
{
	if(p_formElement.disabled==true)	
		return true;
	var classlist = $(p_formElement).attr("class");
	var elementValidationCondition = String(classlist).split(" ");
	var elementType = String(p_formElement.type);

	for( var j = 0; j < elementValidationCondition.length; j++)
	{
		var result = true;

		
		switch(elementType)
		{
			case "textarea":			
				result = isTextTypeValidate( p_formElement.value , elementValidationCondition[j] );
				if(result == false)
				{
					alert("Please Enter " + classlist);
					return false;
				}		
			break;
			case "text":
				result = isTextTypeValidate( p_formElement.value , elementValidationCondition[j] );				
			break;
			case "radio":
				result = isCheckboxRadioTypeValidate( p_formElement );
				if(result == false)
				{
					alert(p_formElement.alt);
					return false;
				}	
			break;
			case "checkbox":
				return true;
			break;

		}
		if(result == false)
		{
			alert("Please Enter " + p_formElement.alt);
			p_formElement.focus();
			return false;
		}			
	}		
	return true;
}

function isCheckboxRadioTypeValidate(p_obj)
{
	var cnt = 0;
	for(var k = 0; k < totalFormElement; k++)
	{	
		if(formElement[k].name == p_obj.name)
			if(formElement[k].checked == true)
				cnt++;
	}
	if(cnt == 0)
	{
		return false;	
	}
}

function isTextTypeValidate( p_val , p_validateconditon)
{				
	if(p_val.length == 0)
		return false;
	
	switch(p_validateconditon)
	{
		case "numeric":
			//if(isNaN(p_val) == true)	return false;
		break;
		
		case "date":
			//(dd/mm/yyyy)
			var dates = String(p_val).split("-");
			if(dates.length != 3)		return false;
			if(dates[0].length>2)		return false;
			if(dates[1].length>3)		return false;
			if(dates[2].length>4)		return false;
			if(isNaN(dates[0])==true)	return false;				
			if(isNaN(dates[1])==false)	return false;
			if(isNaN(dates[2])==true)	return false;
		break;
		case "email":
			if(p_val.indexOf(".") == -1)	return false;
			if(p_val.indexOf("@") == -1)	return false;			
		break;
		
		case "website":
			if(p_val.indexOf(".")==-1)	return false;
		break;
		
		case "alphanumeric":
		break;	
	}
	return true;
}
function validatequick(p_e)
{
	var flag=true;
	if(document.getElementById(p_e+"1").checked == true)	
		flag = false;
	disablenow( document.getElementById(p_e+"yes") , flag);
	if(p_e=="ans")
		disablenow( document.getElementById(p_e+"yes1") , flag);
}
function disablenow(p_element,p_flag)
{
	p_element.disabled = p_flag;
}
