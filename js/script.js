var footer;
$(function()
{
	footer = $("#footerpart");
	resizeWindow();	
});

$(window).resize(function()
{
	resizeWindow();
});

function resizeWindow()
{
	if(document.documentElement.scrollHeight - document.documentElement.clientHeight > 0)
		footer.css("position","relative");
	else
		footer.css("position","fixed");
}



