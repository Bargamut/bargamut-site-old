<?php include('includes/top.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo TITLE_NAME;?></title>
<link rel="stylesheet" type="text/css" href="style/default.css" />
<link rel="stylesheet" type="text/css" href="style/ui-lightness/jquery-ui-1.8.9.custom.css" />
<script type="text/javascript" language="javascript" src="js/jquery/jquery-1.5.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.plugins/livequery-1.0.3/jquery.livequery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.ui/jquery-ui-1.8.9.custom.min.js"></script>
</head>
<script language="javascript" type="text/javascript">
$("#subm_but").livequery("click",function(){
	var d = $("#bday").val(),m = $("#bmonth").val(),y = $("#byear").val();
	$.ajax({
		type: "POST",
		url: "/pifsquare.do.php",
		data: "bday="+d+"&bmonth="+m+"&byear="+y,
		cache: false,
		success: function(html){
			console.log(html);
			if(html != 'null'){
				
				var data = eval("("+html+")");
				$("#content").html(
					'Вы живете '+data.life+'-ю жизнь. По теории Пифагора, человек проживает всего 15 жизней, а затем его душа переходит в иные высшие сферы.<br /><br /><hr /><hr />'+data.character);
			}else{
				
			}
		}
	});
});
</script>
<body>
	<table border="0" cellpadding="0" cellspacing="0" width="1100px" height="100px" align="center">
	<?php include('includes/header.php');?>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" width="1100px" height="100%" align="center">
   	<tr><td>
    	<b>Нумерология чисел. Квадрат Пифагора по дате рождения. Квадрат Cудьбы по системе Пифагора</b><br />
        <hr />
        <b>Внимание!!!</b> Данный результат нисколько не претендует на точность описания - всё вариативно. ;)
        <br /><br />
        <form name="piform" method="post" >
        <label>Введите дату рождения:</label><br />
        <label>Число: 
            <select id="bday">
            <?php for($i = 1; $i <= 31; $i++){?>
                <option value="<?=$i?>"><?=$i?></option>
            <?php }?>
            </select>
        </label>
        <label>Месяц:
            <select id="bmonth">
            <?php for($i = 1; $i <= 12; $i++){?>
                <option value="<?=$i?>"><?=$i?></option>
            <?php }?>
            </select>
        </label>
        <label>Год:
            <select id="byear">
            <?php for($i = date('Y'); $i >= 1900; $i--){?>
                <option value="<?=$i?>"><?=$i?></option>
            <?php }?>
            </select>
        </label>
        </form>
        <button id="subm_but" name="subm_but">Ок</button>
        <br /><hr />
        <div id="content"></div>
    </td></tr>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" width="1100px" height="100px" align="center">
    <?php include('includes/footer.php');?>
    </table>
</body>
</html>
<?php include('includes/bottom.php');?>