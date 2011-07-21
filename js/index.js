function getAbsoluteLeft(thisobj){
	var left = thisobj.offsetLeft;
	while(thisobj.offsetParent != null && thisobj.offsetParent.tagName.upperCase != "BODY"){
		left += thisobj.offsetParent.offsetLeft;
		thisobj = thisobj.offsetParent;
	}
	return left;
}

function getAbsoluteTop(thisobj){
	var top = thisobj.offsetTop;
	while(thisobj.offsetParent != null && thisobj.offsetParent.tagName.upperCase != "BODY"){
		top += thisobj.offsetParent.offsetTop;
		thisobj = thisobj.offsetParent;
	}
	return top;
}

function getObjectHeight(thisobj){
	var height = thisobj.offsetHeight;
	return height;
}

function getObjectWidth(thisobj){
	var width = thisobj.offsetWidth;
	return width;
}

function showsubMenu(thisobj,id){
	var showobj = document.getElementById(id);
	var absLeft = getAbsoluteLeft(thisobj);
	var absTop = getAbsoluteTop(thisobj);
	var height = getObjectHeight(thisobj);
	var width = getObjectWidth(thisobj);
					
	showobj.style.left = absLeft;
	showobj.style.top = absTop+height;
	showobj.style.width = width-2;
	showobj.style.display = "block";

	
	//thisobj.style.border="0px dashed #ffffff";
	thisobj.style.backgroundColor="";
	
}

function setHiddenValue(hidid,value){
	document.getElementById(hidid).value = value ;
}

function hiddensubMenu(divid){
	var flag = $(divid+"hiddenflag").value;
	
	if(flag=="true"){
		$(divid).style.display = "none";	
		setDefault();
	}
	
}

function setDefault(){
	var tableobj = $('menu_hold');
	var rows = tableobj.rows;
	var cells = rows[0].cells; 
	for(var i=0;i<cells.length;i++){
		var va = $('subm'+i+"hiddenflag").value;
		if(va=="true"){
			//cells[i].style.border="0px dashed #000000";
			cells[i].style.backgroundColor="";
		}
	}	
	for(var i=0;i<5;i++){
		var va = $('subm'+i+"hiddenflag").value;

		if(va=="true"){
			$('subm'+i).style.display="none";
			$('subm'+i+"hiddenflag").value="true";
		}
	}
}