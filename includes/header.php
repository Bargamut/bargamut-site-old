<?php
/*Шапка сайта*/
/*$top_menu_query = db_select('menu','`m_address`,`m_Caption`');
while($arr_menu = mysql_fetch_array($top_menu_query,MYSQL_ASSOC)){
	foreach($arr_menu as $key => $value){$menu[$arr_menu['m_address']] = $arr_menu['m_Caption'];}
}*/
?>
<tr class="logo_line"><td background="/img/default/logo_bgr.png" width="1100px" height="100px" valign="top">
    <a href="index.php" title='BARGAMUT.RU' target="_parent"><img class="logo_img" src="/img/default/logo.png" align="left" width="300px" height="100px" /></a>
	<div align="left" style="width:600px; float:left;" class="">
    <ul class="lavaLamp">
    	<li><a href="#">Главная</a></li>
    	<li><a href="#">Статьи</a></li>
    	<li><a href="#">Файлы</a></li>
    	<li><a href="#">Портфолио</a></li>
    	<li><a href="#">Контакты</a></li>
    </ul>
    </div>
    <div align="left" style="width:180px; float:left;" class="search_box">
    	<img class="searchbutton" align="left" src="/img/default/search_but.png" title="Найти" />
    	<form id="search_form" name="search_form" method="post">
        <input id="search_input" name="search_input" type="text" width="150px" value="Поиск" class="searchfield" onfocus="if (this.value == 'Поиск') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Поиск';}"/>
        </form>
	</div>
    <img src="/img/default/logo_bgr_r.png" align="right" width="20px" height="100px" style="float:right;"/></td>
</tr>
<tr><td colspan="2">
	<img align="right" src="/img/default/rss2.png" style="margin:1px;" />
    <div class="round_box">
            <?php /*foreach($menu as $m_key => $m_value){echo '<div class="links"><a href="#">'.$m_value.'</a></div>';}*/?>
    </div>
</td></tr>