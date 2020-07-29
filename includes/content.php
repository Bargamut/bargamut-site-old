<?php
/*$photos_query = db_select('images','`i_fname`,`i_falbum`,`i_fcaption`,`i_fdesc`','`i_main_flag` = "1"');
while($arr_photos = mysql_fetch_array($photos_query,MYSQL_ASSOC)){
	foreach($arr_photos as $i_key => $i_value){
		$photos[$arr_photos['i_fname']] = array('album'=>$arr_photos['i_falbum'],
												'caption'=>$arr_photos['i_fcaption'],
												'desc'=>$arr_photos['i_fdesc']);
	}
}*/
?>

<table border="0" cellpadding="0" cellspacing="0" width="1100px" height="480px">
<tr valign="top">
<td>
    <div class="photo_header">
        <div class="p_header">Заголовок</div>
        <div class="p_sub_header">Подзаголовок</div>
        <hr width="700px" align="left" style="margin:10px 0 0 5px;" />s
    </div>
</td>
</tr>
<tr valign="top">
<td>
    <div id="photo_slider" class="photo_container" onmouseover="fade_nav(1); return false;" onmouseout="fade_nav(0); return false;">
        <div class="slider_photo">
            <div id="photo_nav_panel" class="photo_nav_panel">
                <img id="l_nav_arrow" class="l_nav_arrow" src="../images/default/photo_slider/nav_arrow_left.png" alt="" onmousedown="roll_photos('left'); return false;" onmouseover="mouse_on(this.id, 'in', 'left'); return false;" onmouseout="mouse_on(this.id, 'out', 'left'); return false;" />
                <img id="r_nav_arrow" class="r_nav_arrow" src="../images/default/photo_slider/nav_arrow_right.png" alt="" onmousedown="roll_photos('right'); return false;" onmouseover="mouse_on(this.id, 'in', 'right'); return false;" onmouseout="mouse_on(this.id, 'out', 'right'); return false;" />
            </div>
            <div id="photo_box" class="photo_box">
                <table border="0" cellpadding="0" cellspacing="0" width="1100px" height="265px">
                <tr valign="top">
                <?php
                /*foreach($photos as $i_name => $i_value){
                    echo '
                    <td>
                        <div class="photo_main">
                                <img id="'.$photos[$i_name]['album'].'" src="../images/foto/'.$photos[$i_name]['album'].'/preview/'.$i_name.'.jpg" alt="'.$photos[$i_name]['capt'].'" title="'.$photos[$i_name]['desc'].'" onmousedown="show_album(this.id); return false;" />
                                <div class="photo_title">'.$photos[$i_name]['caption'].'</div>
                            <div class="photo_desc">'.$photos[$i_name]['desc'].'</div>
                        </div>
                    </td>';}*/?>
                </tr>
                </table>
            </div>
        </div>
    </div>
</td>
</tr>
</table>