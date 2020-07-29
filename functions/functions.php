<?php
// Проверка Таблицы БД, куда забивается инфа
function TableCheck($table_check){
	switch ($table_check){
		case 'n': return 'site_news'; break;
		case 'p': return 'site_pages'; break;
		case 'i': return 'site_images'; break;
	}
}
?>