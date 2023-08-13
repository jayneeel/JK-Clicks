var imgArray=new Array("img1.jpg","img2.jpg","img3.jpg","img4.jpg","img5.jpg","img6.jpg","img7.jpg","img8.jpg","img9.jpg");
var pGArray=new Array("Massimo Margagnoni","Massimo Margagnoni","Massimo Margagnoni","Giuseppe Milo","Giuseppe Milo","Giuseppe Milo","GorlitzPhotography","GorlitzPhotography","GorlitzPhotography");

function OpenWin(val)
{
	var MyWin=window.open("photoDetails.html");
}

function imgdetails(menu)
{
	var i=menu;
	var name=document.getElementById("pGName");
	imgDisplay.src=imgArray[i];
	name.innerHTML=pGArray[i];
}
