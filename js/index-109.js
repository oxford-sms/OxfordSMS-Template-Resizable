/**
* OxfordSMS - Template
* @author    Ivan Komlev
* @copyright Copyright (C) 2020 Ivan Komlev. All rights reserved.
* @license	 GNU/GPL
*/


function adaptLayout()
{
	MovePageHeader("page-header");
	
	if(menuItemAlias!="application-form")
	{
		MoveYearTermSelector();
		MovePageHeader("componentheading");
		MovePageCTRecordCount();

		MoveCTEditFormButtons()

		MoveCTToolBarAddNew();
		MoveCTToolBar();
		MoveCTSearchBoxes();
		MovePageCTRecordCount()
		MoveTopMenu();
	
	
		MoveSideMenu();
	}
	
	if(window.innerWidth > 770)
	{
		let element = document.getElementById("org_your_repos");
		element.classList.add("js-sticky");
	}
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

function MoveSideMenu()
{
	var x = document.getElementById("OxfordSMSSideMenus");
	if(x)
	{
		var items_mobile=[];

		//For mobile menu
		var aElements=x.getElementsByTagName( 'a' );//get a
		for (var ai = 0; ai < aElements.length; ai++) {

			var imgElements=aElements[ai].getElementsByTagName( 'img' );//get image

			var a=aElements[ai];

			var title=""
			var spanElements=aElements[ai].getElementsByTagName( 'span' );//get image
			if(spanElements.length>0)
				title=spanElements[0].innerHTML;
				
			m='<a aria-label="'+title+'" href="'+a.href+'"><div class="Header-link py-md-3  mr-0 mr-md-3 py-2 border-top border-md-top-0 border-white-fade-15">';

			if(imgElements.length>0)
				m+='<img class="avatar avatar-user" src="'+imgElements[0].src+'" width="20" height="20" alt="'+title+'" />';
			else
			{
				if(title=="")
					title=a.innerHTML;
			}

			m+=title+'</div></a>';

			items_mobile.push(m);
		}

		document.getElementById("oxfordSMSDashboardMenu_Mobile").innerHTML+=items_mobile.join("");;
	}
}

function MoveTopMenu()
{
	
	var content="";
	var x = document.getElementsByClassName("dashboardmenusimple");//dashboardmenuitemsimple
	
	var i;
	var items=[];
	var items_mobile=[];

	for (i = 0; i < x.length; i++) {
		var a=x[i].innerHTML;
		var parts=a.split(",");
		for (var j = 0; j < parts.length; j++) {
			
			var m= parts[j].split('class="btn button btn-primary"').join('class="btn btn-outline f6 width-full mb-3"');
			items.push(m);

		}

		//For mobile menu
		var aElements=x[i].getElementsByTagName( 'a' );//get a
		for (var ai = 0; ai < aElements.length; ai++) {

			var imgElements=aElements[ai].getElementsByTagName( 'img' );//get image

			var a=aElements[ai];
				
			m='<a aria-label="'+a.title+'" href="'+a.href+'"><div class="Header-link py-md-3  mr-0 mr-md-3 py-2 border-top border-md-top-0 border-white-fade-15">';

			if(imgElements.length>0)
				m+='<img class="avatar avatar-user" src="'+imgElements[0].src+'" width="20" height="20" alt="'+a.title+'" />';

			m+=a.title+'</div></a>';

			items_mobile.push(m);
		}


		
		x[i].innerHTML='';
	} 
	
	document.getElementById("oxfordSMSDashboardMenu").innerHTML=items.join("");
	document.getElementById("oxfordSMSDashboardMenu_Mobile").innerHTML=items_mobile.join("");;
	
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
		
		//document.getElementById("oxfordSMSPageHeader_Mobile").innerHTML+=content;
		
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
		document.getElementById("oxfordSMSPageHeader_Mobile").innerHTML+=content;
	}
}


function MoveCTToolBarAddNew()
{
	var content="";
	var x = document.getElementsByClassName("toolbarIcons");
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		if(x[i].id.indexOf('ctToolBarAddNew')!=-1 || x[i].id.indexOf('ctToolBarExport2CSV')!=-1)
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
		document.getElementById("oxfordSMSDashboardCTToolBar_Mobile").innerHTML+=content;
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
		document.getElementById("oxfordSMSDashboardCTToolBar").innerHTML+=content;
		document.getElementById("oxfordSMSDashboardCTToolBar_Mobile").innerHTML+=content;
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
		document.getElementById("oxfordSMSDashboardCTSearchBoxes_Mobile").innerHTML+=content;
	}
	
}


function MoveCTEditFormButtons()
{
	
	var content="";
	var x = document.getElementsByClassName("ctEditFormButton");
	
	var i;
	var items=[];
	for (i = 0; i < x.length; i++) {
		var wrap = document.createElement('div');
		wrap.appendChild(x[i].cloneNode(true));
		
		if(items.indexOf(wrap.innerHTML)==-1)
			items.push(wrap.innerHTML);
	} 
	
	
	if(items.length>0)
	{
		removeClassElements("ctEditFormButton");
	
		content=items.join("");
		var o1=document.getElementById("oxfordSMSDashboardCTToolBar");
		o1.innerHTML+=content;

		var o2=document.getElementById("oxfordSMSDashboardCTToolBar_Mobile")
		o2.innerHTML+=content;
	}
	
}

function MoveYearTermSelector()
{
	var x = document.getElementById("selectorBox");
	if(x)
	{
		var content='<div id="selectorBox">'+x.innerHTML+'</div>';
		x.innerHTML="";
		
		document.getElementById("oxfordSMSDashboardYeraTermMonthBoxes").innerHTML+=content;
		
		content=content.replace('id="oxfordsms_departmentselector"','id="oxfordsms_departmentselector_mobile"');
		content=content.replace('id="oxfordsms_yearselector"','id="oxfordsms_yearselector_mobile"');
		content=content.replace('id="oxfordsms_termselector"','id="oxfordsms_termselector_mobile"');
		
		//content=content.replace('selectorChanged()','selectorChanged_custom(\'_mobile\')');
		content=content.split('selectorChanged()').join('selectorChanged_custom(\'_mobile\')');
		
		document.getElementById("oxfordSMSDashboardYeraTermMonthBoxes_Mobile").innerHTML+=content;
	
	}
}


function dashboardCountdown(id)
{
	var obj=document.getElementById(id);
	var countDownDate=parseInt(obj.dataset.time);
	if(isNaN(countDownDate))
		return;
	
	var currenttime=parseInt(obj.dataset.currenttime);
	if(isNaN(currenttime))
		return;
	
	// Update the count down every 1 second
	var x = setInterval(function() {

		// Find the distance between now and the count down date
		var distance = countDownDate-currenttime;//now;
		currenttime+=1;

		var ad=Math.abs(distance);
		var hours = Math.floor(ad / 3600) ;
		var minutes = Math.floor((ad-(hours*3600))/60);
		var seconds = Math.floor(ad-(hours*3600)-minutes*60);

		// Display the result in the element with id="demo"

		var t_str="";
		if(hours!=0)
			t_str+=hours + "h ";
		
		if(minutes!=0)
			t_str+=minutes + "m ";
		
		obj.innerHTML =t_str + seconds + "s";

		// If the count down is finished, write some text
		
		if (distance < 0 && distance> -2400*1000) {
			//clearInterval(x);
			obj.innerHTML = "In progress";
		}
		else if (distance < -2400) {
			clearInterval(x);
			obj.innerHTML = "EXPIRED";
		}
		
		
	}, 1000);
	
}



