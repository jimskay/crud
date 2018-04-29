function open_panel()
{
slideIt();
var a=document.getElementById("sidebar");
a.setAttribute("id","sidebar1");
a.setAttribute("onclick","close_panel()");
$("#fechadiv").attr("src","templates/hville2016/img/fecha.png");
}

function slideIt()
{
	var slidingDiv = document.getElementById("slider");
	var stopPosition = 0;
	
	if (parseInt(slidingDiv.style.right) < stopPosition )
	{
		slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
		setTimeout(slideIt, 1);	
	}
}
	
function close_panel(){
slideIn();
a=document.getElementById("sidebar1");
a.setAttribute("id","sidebar");
a.setAttribute("onclick","open_panel()");
$("#fechadiv").attr("src","templates/hville2016/img/abre.png");
}

function slideIn()
{
	var slidingDiv = document.getElementById("slider");
	var stopPosition = -282;
	
	if (parseInt(slidingDiv.style.right) > stopPosition )
	{
		slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
		setTimeout(slideIn, 1);	
	}
}