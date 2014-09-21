$(document).ready(function(){
   $("#teacher_select_region a").attr("onclick","item_selected(this);");
   var nodes = $("#teacher_select_region a");
   for(i = 0;i < nodes.length;i++) {
		if(nodes[i].innerHTML == "不限") {
			nodes[i].className = "item_selected";
		}
   }
    var child = $("#teacher_select_region p");
	for(i = 0;i < child.length;i++) {
		child[i].childNodes[0].className = "category";
	}
})

function item_selected(my) {
	var child = my.parentNode.childNodes;
	if(child[0].innerHTML != "地区分类:" && child[0].innerHTML != "广东") {
		for(i = 1;i < child.length;i++) {
			if(child[i].className = "item_selected" )
				child[i].className = "";
		}
	} else {
		
		child = my.parentNode.parentNode.childNodes[0].childNodes;
		for(i = 1;i < child.length - 1;i++) {
			if(child[i].className = "item_selected" )
				child[i].className = "";
		}
		child = my.parentNode.parentNode.childNodes[2].childNodes;
		for(i = 0;i < child.length;i++) {
			if(child[i].className = "item_selected" )
				child[i].className = "";
		}
		
	}
	my.className = "item_selected";
	$("#page_num")[0].innerHTML = 1;
	update_content();
}
