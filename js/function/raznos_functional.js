// JavaScript Document
var i = 0;
$(".draggable").livequery('mouseover',function(){
	var preID = $(this).attr("id");
	// перемещение
	$("#"+preID).draggable({
		cursorAt:{left:-10,top:-10},
		refreshPositions: true,
		opacity: .6,
		appendTo: '#container',
		revert: 'invalid',
		handle:'#move_'+preID,
		addClasses: false
	});
	$("div").disableSelection();
	
	// помещение в контейнер
	$("#container").droppable({
		drop: function(event, ui){
				$("#text_"+preID).html($("#content_"+preID).val());
				$("#edit_"+preID).css("display","block");
				$("#text_"+preID).css("display","block");
				$("#content_"+preID).hide();
				$("#subm_"+preID).css("display","none");
			}
	});
	
	// изменение размера
	$("#"+preID).resizable({
		minHeight:'40',
		minWidth:'120',
		maxHeight:'300',
		maxWidth:'400',
		animate: true,
    	ghost: true,
		stop:function(){
			$("#content_"+preID).css("width","100%");
			$("#content_"+preID).css("height","100%");
			$("#text_"+preID).css("width","100%");
			$("#text_"+preID).css("height","100%");
		}
	});
});

// добавление элемента
function add_element(){
	i++;
	var dID = 'draggable'+i;
	var iID = 'instruments_'+dID;
	var mID = 'move_'+dID;
	var eID = 'edit_'+dID;
	var clID = 'close_'+dID;
	var tID = 'text_'+dID;
	var cID = 'content_'+dID;
	var sID = 'subm_'+dID;
	var elID = 'element_'+dID;
	var clIDl = 'close_'+dID+'line';
	var close_element = '<div id="'+elID+'" class="element_draggable">'+'\n'+
	dID+'\n'+
	'<span id="'+clIDl+'" class="close_draggable_line" onclick="delete_div(\''+clID+'\'); return false;">'+'\n'+
	'<img id="close_button_line" src="../images/default/raznos/admin/close_button.png" onmouseover="change_src(this.id, 1); return false;" onmouseout="change_src(this.id, 0); return false;" />'+'\n'+
	'</span></div>';
	
	var element = '<div id="'+dID+'" class="draggable">'+'\n'+
		'<div id="'+iID+'" class="instruments_draggable">'+'\n'+
        	'<div id="'+mID+'" class="move_draggable">'+'\n'+
            	'<img src="../images/default/raznos/admin/move_button.png" onmouseover="change_src(this.id, 1); return false;" onmouseout="change_src(this.id, 0); return false;" />'+'\n'+
			'</div>'+'\n'+
			'<div id="'+eID+'" class="edit_draggable" onclick="edit_div(this.id); return false;">'+'\n'+
            	'<img src="../images/default/raznos/admin/edit_button.png" />'+'\n'+
			'</div>'+'\n'+
		'</div>'+'\n'+
		'<div id="'+clID+'" class="close_draggable" onclick="delete_div(this.id); return false;">'+'\n'+
			'<img src="../images/default/raznos/admin/close_button.png" />'+'\n'+
		'</div>'+'\n'+
        '<div id="'+tID+'" class="text_draggable"></div>'+'\n'+
		'<textarea id="'+cID+'" name="'+cID+'" cols="35" rows="8" class="content_draggable">Перетащи меня</textarea>'+'\n'+
		'<div id="'+sID+'" class="subm_draggable" onclick="subm_edit(this.id); return false;">'+'\n'+
        	'<img src="../images/default/raznos/admin/ok_button.png" />'+'\n'+
		'</div>'+'\n'+
    '</div>'+'\n';
	/*<div id="draggable" class="draggable">
    	<div id="instruments_draggable" class="instruments_draggable">
        	<div id="move_draggable" class="move_draggable">
            	<img id="move_button" src="../images/default/raznos/admin/move_button.png" onmouseover="change_src(this.id, 1); return false;" onmouseout="change_src(this.id, 0); return false;" />
			</div>
            <div id="edit_draggable" class="edit_draggable" onclick="edit_div(this.id); return false;">
            	<img id="edit_button" src="../images/default/raznos/admin/edit_button.png" onmouseover="change_src(this.id, 1); return false;" onmouseout="change_src(this.id, 0); return false;" />
			</div>
		</div>
		<div id="close_draggable" class="close_draggable" onclick="delete_div(this.id); return false;">
        	<img id="close_button" src="../images/default/raznos/admin/close_button.png" onmouseover="change_src(this.id, 1); return false;" onmouseout="change_src(this.id, 0); return false;" />
		</div>
		<div id="text_draggable" class="text_draggable"></div>
		<textarea id="content_draggable" name="content_draggable" class="content_draggable">Перетащи меня</textarea>
		<div id="subm_draggable" class="subm_draggable" onclick="subm_edit(this.id); return false;" align="right">
        	<img id="ok_button" src="../images/default/raznos/admin/ok_button.png" onmouseover="change_src(this.id, 1); return false;" onmouseout="change_src(this.id, 0); return false;" />
		</div>
    </div>*/
	
	$("#drag_elements").append(close_element);
	$("#parent_drag").append(element);
}

// редактирование элемента
function edit_div(dID){
	var preID = $("#"+dID).parent().parent().attr('id');
	$("#content_"+preID).show();
	$("#content_"+preID).css("height","100%");
	$("#content_"+preID).html($("#text_"+preID).html());
	$("#edit_"+preID).css("display","none");
	$("#text_"+preID).css("display","none");
	$("#subm_"+preID).css("display","block");
}

// нажатие ОК приредактировании
function subm_edit(dID){
	var preID = $("#"+dID).parent().attr('id');
	$("#text_"+preID).css("display","block");
	$("#text_"+preID).html($("#content_"+preID).val());
	$("#content_"+preID).hide();
	$("#edit_"+preID).show();
	$("#subm_"+preID).css("display","none");
}

// удаление элемента
function delete_div(dID){
	var preID = $("#"+dID).parent().attr('id');
	$("#"+preID).detach();
	$("#element_"+preID).detach();
}

function change_src(marker){
	var image_rel = $(this).attr("class");
	alert(image_rel);
	if(marker == 1){
		$(this).attr("src", "../images/default/raznos/admin/"+image_rel+"_hover.png");
	}else{
		$(this).attr("src", "../images/default/raznos/admin/"+image_rel+".png");
	}
}