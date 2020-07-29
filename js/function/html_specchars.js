// JavaScript Document
// Замена всех символов HTML
function htmlspecialchars(html){
	// Таблица П6.1. Символы латиницы
	html = html.replace(/&nbsp;/g, " "); // неразрывный пробел
	html = html.replace(/&iexcl;/g, "¡"); // перевернутый восклицательный знак
	html = html.replace(/&cent;/g, "¢"); // цент
	html = html.replace(/&pound;/g, "£"); // фунт стерлингов
	html = html.replace(/&curren;/g, "¤"); // знак денежной единицы
	html = html.replace(/&yen;/g, "¥"); // йена
	html = html.replace(/&brvbar;/g, "¦"); // вертикальная черта
	html = html.replace(/&sect;/g, "§"); // параграф
	html = html.replace(/&copy;/g, "©"); // знак авторского права
	html = html.replace(/&laquo;/g, "«"); // открывающая двойная угловая кавычка
	html = html.replace(/&reg;/g, "®"); // охраняемый знак
	html = html.replace(/&macr;/g, "¯"); // надчеркивание
	html = html.replace(/&deg;/g, "°"); // градус
	html = html.replace(/&acute;/g, "´"); // острое ударение
	html = html.replace(/&raquo;/g, "»"); // закрывающая двойная угловая кавычка
	html = html.replace(/&times;/g, "×"); // знак умножения
		
		// Таблица П6.2. Специальные символы
	html = html.replace(/&quot;/g, "\""); // кавычка
	html = html.replace(/&amp;/g, "&"); // амперсант
	html = html.replace(/&lt;/g, "<"); // левая угловая скобка	
	html = html.replace(/&gt;/g, ">"); // правая угловая скобка
	html = html.replace(/&tilde;/g, "˜"); // малая тильда
	html = html.replace(/&ensp;/g, " "); //	короткий пробел
	html = html.replace(/&emsp;/g, " "); //	длинный пробел
	html = html.replace(/&thinsp;/g, " "); // узкий пробел
	html = html.replace(/&ndash;/g, "-"); // короткое тире
	html = html.replace(/&mdash;/g, "-"); // длинное тире
	html = html.replace(/&lsquo;/g, "'"); // открывающая одинарная кавычка
	html = html.replace(/&rsquo;/g, "'"); // закрывающая одинарная кавычка
	html = html.replace(/&sbquo;/g, ","); // нижняя одинарная кавычка
	html = html.replace(/&ldquo;/g, "\""); // открывающая двойная кавычка
	html = html.replace(/&rdquo;/g, "\""); // закрывающая двойная кавычка
	html = html.replace(/&lsaquo;/g, "<"); // открывающая угловая кавычка
	html = html.replace(/&rsaquo;/g, ">"); // закрывающая угловая кавычка
		
	// Таблица П6.3. Математические символы и греческие буквы
	html = html.replace(/&hellip;/g, "..."); //	многоточие
	html = html.replace(/&trade;/g, "™"); // торговая марка
	html = html.replace(/&infin;/g, "∞"); // бесконечность
	html = html.replace(/&sim;/g, "∼"); //	оператор тильда
	return html;
}