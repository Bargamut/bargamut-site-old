<?php
// Создание таблицы в БД
/*
$colums = array{
	"col_name" => array{
		"col_type" => '',
		"col_modif" => ''
	"col_name2" => array{
		"col_type2" => '',
		"col_modif2" => ''
	}
}
*/
function db_create($table,$columns){
	mysql_query("create table ".$table." (".$columns.")") or die(mysql_error());
}
// Удаление таблицы в БД
function db_drop($table,$column = 'no'){
	if ($column != 'no'){
		mysql_query("alter table ".$table." drop ".$column) or die(mysql_error());
	}else{
		mysql_query("drop ".$table) or die(mysql_error());
	}
}
// Создание строки в БД
function db_insert($table,$fields,$val){
	$val = htmlspecialchars($val,ENT_COMPAT,'UTF-8');
	$sql = "insert into ".$table." (".$fields.") values (".$val.")";
	if($_SESSION['debug_mode'] == 'on')echo 'ЗАПРОС <strong>INSERT</strong>: '.$sql.'<br>';
	mysql_query($sql) or die(mysql_error());
}
// Обновление данных в строке БД
function db_update($table,$set,$where){
	mysql_query("update ".$table." set ".$set." where ".$where) or die(mysql_error());
}
// Удаление строки в таблице БД
function db_delete($table,$where = 'no'){
	if ($where != 'no'){$where = ' where '.$where;}else{$where = '';}
	mysql_query("delete from ".$table.$where) or die(mysql_error());
}
// Выбор значения из БД
function db_select($table,$fields = '*',$where = 'no',$order = 'no'){
	if ($where != 'no'){$where = ' where '.$where;}else{$where = '';}
	if ($order != 'no'){$order = ' order by '.$order;}else{$order = '';}
	$sql = "select ".$fields." from ".$table.$where.$order;
	if($_SESSION['debug_mode'] == 'on')echo 'ЗАПРОС <strong>SELECT</strong>: '.$sql.'<br>';
	$result = mysql_query($sql) or die(mysql_error());
	return $result;
}
?>