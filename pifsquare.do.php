<?php
$day = $_POST['bday'];
$month = $_POST['bmonth'];
$year = $_POST['byear'];

$birth_array = str_split(str_replace('0','',$day.$month.$year));

$sum1 = array_sum($birth_array);
$sum2 = array_sum(str_split($sum1));
$sum3 = $sum1 - $birth_array[0]*2;
$sum4 = array_sum(str_split($sum3));

$itog = str_split(str_replace('0','',$day.$month.$year.$sum1.$sum2.$sum3.$sum4));

$life = count($itog);
$count_val = array_count_values($itog);
$count_val["life"] = $life;

$character = array(
	'1' => array(
		'caption' => "Характер человека и его волевые качества",
		0 => "Нет определения",
		1 => "Вы законченный эгоист. В любом деле стараетесь извлечь только собственную выгоду и с чужими интересами вы совсем не считаетесь.",
		2 => "Знак двойственности. Сочетают эгоизм и неуверенность в себе с коммуникабельностью. В то время как сами себе кажетесь самым талантливым и умным, Вы, тем не менее, часто ждете, когда ваши поступки найдут одобрение у окружающих.",
		3 => "У вас спокойный и адекватный характер. Вы не любите подчиняться, но и к власти сильно не рветесь. Трезво оцениваете ситуацию и легко идете на компромиссы.",
		4 => "Волевой характер. Такие люди прямолинейны, не лгут и не выносят лести. Мужчины в силу своего характера выбирают работу в силовых ведомствах или структурах, женщины придерживаются строгих правил и в «кулаке» держат семью.",
		5 => "Диктатор, тиран. Злопамятный и мстительный, чтобы реализовать поставленные цели буквально «пойдет по трупам». В семье человек с таким характером может стать деспотом для своей второй половины. С появлением детей и внуков всю свою нереализованную любовь дарит им.",
		6 => "Встречается очень редко. Такая комбинация цифр показывает, что человек в общении очень тяжел, часто страдает какой-нибудь идеей «фикс»."
	),
	'2' => array(
		'caption' => "Биоэнергетика, эмоциональность. Энергия человека",
		0 => "Отсутствие двоек говорит о том, что ваша биоэнергетика находится на самом низком уровне, но канал для интенсивного набора её извне открыт. Такие люди любят раритеты, антиквариат и старые чужие вещи. Именно поэтому, они много болеют, собирая с чужими вещами их негативное влияние.",
		1 => "Энергии для жизни достаточно, однако постоянно необходимо пополнять её запасы. Таким людям желательно избегать ситуаций, способных привести организм к стрессу и нужно заниматься физической культурой. Они ранимы и обидчивы, очень чувствительны к переменам погоды.",
		2 => "Энергичны. Правда, слишком обидчивы, но добры с близкими людьми. Такие люди могут стать хорошими санитарами или медицинскими работниками.",
		3 => "В вас заложены экстрасенсорные способности. Своим биополем Вы способны лечить людей. Правда, этот дар в себе развивают не все.",
		4 => "такие люди имеют магнетическую привлекательность для лиц противоположного пола. Они общительны и легко находят друзей. Чем больше по значению у таких людей второе рабочее число (от 5 до 9), тем больше у них вероятность стать «энергетическими донорами», а с числом от 1 до 4 они сами являются «энергетическими вампирами»."
	),
	'3' => array(
		'caption' => "Самореализация, созидание. Интерес к точным наукам или технике",
		0 => "Отсутствие троек говорит о чистоплотности, хозяйственности и пунктуальности. Однако таким людям не хватает душевной теплоты, поэтому в строгости воспитывают даже детей.",
		1 => "С переменчивым характером, как говорят в таких случаях, это - «человек настроения». Добрые по натуре, бесшабашные и не умеющие экономить. Аккуратные и пунктуальные.",
		2 => "Имеется явно выраженная тяга и способность к наукам: математике, химии, физике. Но оно не является доминирующим. От других их отличает порядочность и высокий духовный уровень.",
		3 => "В таких людях заложены задатки великих ученых. Но в личной жизни они замкнуты и в свой круг допускают только избранных ими людей. Расчетливы от природы, и это помогает им определять благополучные для себя моменты. Находящийся в голове биологический калькулятор делает безошибочные расчеты.",
		4 => "Чем больше троек в квадрате, тем меньше желания прилагать усилия для развития и самореализации."
	),
	'4' => array(
		'caption' => "Здоровье, устойчивость в жизни, интеллектуальные способности",
		0 => "У Вас слабое здоровье и предрасположенность к различного рода заболеваниям. И чем больше у вас двоек, тем сильнее вы будете болеть.",
		1 => "Так как ваше здоровье находится на среднем уровне, рекомендуется заняться укреплением иммунитета, начиная с закаливания организма. Иначе к старости вас одолеют серьезные заболевания. Лучшие виды спорта для вас – это плавание и бег.",
		2 => "Крепкое здоровье и повышенная сексуальность. Такие люди ценят и стремятся поддерживать красоту тела.",
		3 => "С богатырским здоровьем. Мужчины обладают сильной физической силой и от природы отменные любовники. Мужчинам стоит остерегаться женщин, у которых много четверок, не всякий из вас её устроит."
	),
	'5' => array(
		'caption' => "Интуиция и логика",
		0 => "У вас при рождении закрыт канал связи  с космосом, поэтому почти нулевая интуиция. Такие люди больше всех совершают жизненных ошибок.",
		1 => "Интуиция Вас не подводит. Вы в состоянии анализировать и правильно оценивать ситуацию и не делать ошибки, предпочитая учиться на чужих.",
		2 => "Ваша интуиция сильно развита, как у детектива. Вы найдете в чужом глазу не только бревно, но и соломинку. Вы разбираетесь в людях и видите вещие сны. Следователь или юрист - это профессии, которые подходят Вам больше всего.",
		3 => "Такие люди, почти ясновидящие. Умеют предсказывать будущее и редко допускают ошибки.",
		4 => "Вы понимаете вещи, которые обычный человек понять не в состоянии, это находится за гранью его понимания. Не копите в себе злобу и обиды, иначе ваши экстрасенсорные, ясновидческие способности будут блокированы."
	),
	'6' => array(
		'caption' => "Приземленность, работа, обязанности перед семьей и обществом Физический труд, мастерство, деньги",
		0 => "Если в вашем квадрате нет шестерок, значит, Вы наделены фантазией, нестандартным воображением и художественным вкусом. Вы часто витаете в облаках и живете придуманном своём мире. Одним словом, Вы – фантазер.",
		1 => "Ваша прагматичность параллельно совмещается со способностью работать творчески или заниматься точными науками. Наилучшее развитие вам дадут совместные занятия физическим и интеллектуальным трудом.",
		2 => "Способны адаптироваться в любой обстановке. Такие люди не бояться физического труда, но умственная работа для них предпочтительней. Однако, чтобы развиваться гармонично, параллельно физический труд нужно совмещать с умственной деятельностью или заниматься искусством. Часто такие люди упрямы.",
		3 => "Три шестерки – зловещий символ. В таких людях есть что-то демоническое, они темпераментны, любят быть в центре внимания. При наличии в первом квадрате 4-х и больше единиц, такой человек будет всем навязывать свое авторитарное мнение и подчинять своей воле. Поэтому, вторую половину для себя нужно выбирать с максимальным количеством числа 2.",
		4 => "Человек, близкий к земле, поэтому должен много работать. Если в его квадратах имеются девятки, у такого человека есть неоспоримая предрасположенность к получению высшего образования и занятий умственным трудом."
	),
	'7' => array(
		'caption' => "Талант, карьера, самопознание. Везение и удача",
		0 => "При отсутствии семерок, у человека складывается нелегкая судьба. Им приходится в течение своей жизни преодолевать сложные испытания, тем самым очищая душу страданиями. Очень часто такие люди находят понимание и утешение в религии.",
		1 => "Жизнь у таких людей складывается легко. Но эта «легкость» мешает им развивать свои таланты. Тем не менее, за них можно не переживать: такие люди никогда не опускаются на самое дно.",
		2 => "Люди, с явными признаками одаренности, обладающие яркими музыкальными способностями и тонким художественным вкусом. При наличии единиц и двоек эгоизм может стоять во главе таланта и им руководить. Таким людям часто везет в азартных играх и в делах.",
		3 => "Люди с большим талантом. Добрые, безмятежные и чувствительные, как дети. Часто умирают в молодом возрасте.",
		4 => "Люди со «знаком и душой Ангела». Очень опасное сочетание. Если не умирают в детском возрасте, в дальнейшем их жизни часто грозит опасность, они попадают в катастрофы, сложные и критические жизненные ситуации."
	),
	'8' => array(
		'caption' => "Чувство долга (обязательность), число совершенства. Терпимость, доброта",
		0 => "Знак свободы. При отсутствии восьмерок – это, так называемые «пофигисты». Люди равнодушные или легкомысленные, которые частенько относятся потребительски к своим близким и считают, что они ничем и никому не обязаны.",
		1 => "Люди, наделенные чувством повышенной ответственности за своё дело, добросовестные в работе. Внимательные и заботливые со своими близкими. Своей первостепенной задачей считают проявление заботы и внимания к своим близким.",
		2 => "Самый лучший партнер для семейного брака. У людей, в квадрате судьбы которых имеются две 8, сильно развито чувство долга. Отличительная черта их характера – желание всем помочь, а особенно одиноким и слабым.",
		3 => "Сочетание трех восьмерок означает призвание служить обществу. Признак мудрого и неравнодушного лидера или просто человека с ярко выраженным гражданским самосознанием.",
		4 => "Это люди, которым открыты сверхъестественные пути. Они изначально обладают, как правило, парапсихологическими способностями и, зачастую, исключительно яркой восприимчивостью ко всем сферам жизни. Таким людям не обойтись без духовного учителя, который направит силы в русло служения Высшим Силам. Если этого не учитывать – негативные качества цифры 8 непременно проявятся."
	),
	'9' => array(
		'caption' => "Интеллект (ум), память",
		0 => "Нет определения",
		1 => "Умный, но эмоциональный и чувствительный человек. Без упорного труда данный от природы ум может стать бесполезным «багажом» - появится риск «скатиться» в бездонную яму полного невежества.",
		2 => "Люди с врожденным интеллектом. Для них неинтересны те знания, которые им даются слишком легко. Независимы и ироничны.",
		3 => "Умные, образованные люди и, в целом, добрые собеседники. Правда, иногда, склонны к сарказму. Такие люди зачастую обладают способностью к преподавательской деятельности, которая очень ярко выражена.",
		4 => "Эти люди – любимцы истины. Они, практически, полностью защищены от провала в любом из своих начинаний, особенно в том случае, если у них вдобавок развита интуиция. Однако нередко есть и минусы в личностных качествах таких людей: они бывают не только грубыми с окружающими, но нередко и немилосердными, и даже жестокими."
	)
);

function cn($n){
	if ($n == ''){$n = 0;}
	return $n;
}

$character_itog = '';
for($i = 1; $i <= 9; $i++){
	$character_itog .= 
		'<b>Цифра '.$i.'</b> (всего: '.cn($count_val[$i]).') - <b>'.$character[$i]['caption'].'</b>'.
		'<br />&nbsp;&nbsp;&nbsp;&nbsp;'.$character[$i][cn($count_val[$i])].'<br /><br /><hr width="50%" />';
}

$count_val['character'] = $character_itog;

echo json_encode($count_val);

?>