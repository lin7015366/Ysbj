//全选/取消多选框
function checkAll(form){ 
	for (var i=0;i<form.elements.length;i++){
		var e = form.elements[i];
		if (e.Name != "chkAll"){
			e.checked = document.all["chkall"].checked;
		}
	}
}

//检测是否有选择多选框的至少一项
function checkBox(objNam){
	var obj = document.getElementsByName(objNam); 
	var objLen= obj.length; 
	var objYN; 
	var i;
//	var counter= 0;
	objYN=false;
	for (i=0;i<objLen;i++){
	if (obj[i].checked==true) {
//		counter++;
		objYN=true;
	}
	}
	return objYN;
}

//批量操作是否移动
function checkShow(selectValue){
	if (selectValue == 'move'){
	    document.getElementById('category').style.display='inline';
	}
	else{
		document.getElementById('category').style.display='none';
	}
}

//批量操作检测
function checkAction(){
	if(!document.listform.operate.value){
	    alert("没有选择任何操作!");
        return false;
	}
	if(document.listform.operate.value=="move" && (document.listform.classid.value=="")){
	    alert("没有选择分类!");
        return false;
	}
	if(checkBox("id[]")==false && document.listform.operate.value!="update"){
	    alert("没有选择任何数据!");
        return false;
	}
} 