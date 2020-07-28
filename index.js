function adaptLayout()
{
	MovePageHeader("page-header");
	MovePageHeader("componentheading");
	MovePageCTRecordCount();
	MoveCTToolBarAddNew();
	MoveCTToolBar();
	MoveCTSearchBoxes();
	MovePageCTRecordCount()
	MoveTopMenu();
	
	MoveYearTermSelector();
	
}

function removeClassElements(className)
{
	do{
		var x2 = document.getElementsByClassName(className);
		if(x2.length>0)
			x2[0].remove();
		else
			break;
		
	}while(x2.length>0)
}

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


function MovePageHeader(className)
{
	
	var content="";
	var x = document.getElementsByClassName(className);
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		var a=x[i].innerHTML;
		items.push(a);
		x[i].innerHTML='';
	} 
	
	removeClassElements(className);
	
	
	if(items.length>0)
	{
		content=items.join("");
		
		if(content.indexOf('<h2')==-1)
			content='<h2 itemprop="headline">'+content+'</h2>';
		
		document.getElementById("oxfordSMSPageHeader").innerHTML+=content;
	}

}

function MovePageCTRecordCount()
{
	
	var content="";
	var x = document.getElementsByClassName("ctCatalogRecordCount");
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		var a=x[i].innerHTML;
		items.push('<div class="OxfordSMS-ctCatalogRecordCount">'+a+'</div>');
		x[i].innerHTML='';
	} 
	
	removeClassElements("ctCatalogRecordCount");
	
	if(items.length>0)
	{
		content=items.join("");
		document.getElementById("oxfordSMSPageHeader").innerHTML+=content;
	}
}


function MoveCTToolBarAddNew()
{
	var content="";
	var x = document.getElementsByClassName("toolbarIcons");
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		if(x[i].id.indexOf('ctToolBarAddNew')!=-1)
		{
			var imgElements=x[i].getElementsByTagName( 'img' );//get image
			
			var title='';
			var img='';
			if(imgElements.length>0)
			{
				img=imgElements[0].src;
				title=imgElements[0].title;
			}
			
			//Create button
			var b='<div id="'+x[i].id+'"><a href=\''+x[i].href+'\' title="'+title+'"><div><button class="btn btn-outline f6 width-full mb-3">';
			
			b+='<img src="'+img+'" title="'+title+'" alt="'+title+'">';
			
			b+='<span>'+title+'</span></button></div></a></div>';
			
			//Add it to the list of buttons
			items.push(b);
			
			x[i].remove();//delete old icon button
		}
	} 

	if(items.length>0)
	{	
		content=items.join("");
		document.getElementById("oxfordSMSDashboardCTToolBar").innerHTML+=content;
	}
}

function MoveCTToolBar()
{
	var content="";
	var x = document.getElementsByClassName("toolbarIcons");
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		if(x[i].id.indexOf('box')!=-1)
		{
			var aElements=x[i].getElementsByTagName( 'a' );//get anchor to get the link
			var imgElements=x[i].getElementsByTagName( 'img' );//get image
			
			var title='';
			var img='';
			if(imgElements.length>0)
			{
				img=imgElements[0].src;
				title=imgElements[0].title;
			}
			
			for (j = 0; j < aElements.length; j++) {
				var a=aElements[j];
				
				//Create button
				var b='<div id="'+x[i].id+'"><a href=\''+a.href+'\' title="'+title+'"><div><button class="btn btn-outline f6 width-full mb-3">';
			
				b+='<img src="'+img+'" title="'+title+'" alt="'+title+'">';
			
				b+='<span>'+title+'</span></button></div></a></div>';
			
				//Add it to the list of buttons
				items.push(b);
			}
		
			x[i].innerHTML='';//delete old icon button
		}
	}
	
	if(items.length>0)
	{
		content=items.join("");
		document.getElementById("oxfordSMSDashboardCTToolBar").innerHTML=document.getElementById("oxfordSMSDashboardCTToolBar").innerHTML+content;
	}
}

function MoveCTSearchBoxes()
{
	
	var content="";
	var x = document.getElementsByClassName("ctSearchBox");
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		var wrap = document.createElement('div');
		wrap.appendChild(x[i].cloneNode(true));
		
		items.push(wrap.innerHTML);
	} 
	
	
	if(items.length>0)
	{
		removeClassElements("ctSearchBox");
	
		content=items.join("");
		document.getElementById("oxfordSMSDashboardCTSearchBoxes").innerHTML+=content;
	}
	
}

function MoveYearTermSelector()
{
	var x = document.getElementById("selectorBox");
	if(x)
	{
		var content='<div id="selectorBox">'+x.innerHTML+'</div>';
		x.innerHTML="";
		document.getElementById("oxfordSMSDashboardCTSearchBoxes").innerHTML+=content;
	}
}
