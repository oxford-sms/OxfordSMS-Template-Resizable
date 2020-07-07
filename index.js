function MoveTopMenu()
{
	
	var content="";
	var x = document.getElementsByClassName("dashboardmenusimple");//dashboardmenuitemsimple
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		var a=x[i].innerHTML;
		var parts=a.split(",");
		for (j = 0; j < parts.length; j++) {
			
			var m= parts[j].split('class="btn button btn-primary"').join('class="btn btn-outline f6 width-full mb-3"');
			items.push(m);
		}
		
		x[i].innerHTML='';
	} 
	
	content=items.join("");
	
	
	document.getElementById("oxfordSMSDashboardMenu").innerHTML=content;
	
}