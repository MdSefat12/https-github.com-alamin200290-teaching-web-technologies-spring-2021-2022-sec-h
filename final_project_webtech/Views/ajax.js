
let anniamal = document.getElementById("aniaml");
let bttn = document.getElementById("btn");
bttn.addEventListener("click",function () {
	let reguesrt = new XMLHttpRequest();
	reguesrt.open("GET","pakage.json","true");
	reguesrt.onload = function(){
		let data = JSON.parse(reguesrt.responseText);
		renderHtml(data);
	};
	reguesrt.send();
;
	
});

function renderHtml(dda)
{
	let htm = "";
	for(i = 0; i<dda.length;i++)
	{
		htm += "<p>" + dda[i].Name + " - "+ dda[i].Type+ " - "+ dda[i].Location+ " - "+dda[i].Transportname+".</p>";

	}
	anniamal.insertAdjacentHTML("beforeend",htm);


}
	