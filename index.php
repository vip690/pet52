<?php
header ("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="data:image/gif;base64,R0lGODlhEAAQAPcAAP///+zHquzFptWymNuFBv+cAP+gAL2HNtmtgEgzESEqM/KOA+uIAMFwAKxrFP+MAf1bE/+IAIJTF7pvBSEiIDgrF8tsAGk+CNdyANx3ANh9ANN/Df9vC/ZqEfaWAFA/KpNhHf+OAP+VAP/gjv/54frGf8xrAOWAALFiALFvFP+EAfuKBv+kANl/DWFLJ/+oAP+9Xvr//8/a5zItLcWoj8+cYbJqAWRKKf+lAP+VBf+iAH9SHQANQ/+PAGRFLLXC1MLIxxsiIktNS76mlbSUeYxWC+qJCTkyLO2NBv+WAfOOBf+pAIRQDAYVJ/368YKGg1lDQYFfYZyIdLKbkpplHSMrM2FLKLdyFviPBv+VA/iNBAANJD05MA4REXRPTrd7f3RmVLSdlJtoI4tdHjk2MP+aBP+dAP+UBf+mAAASKVdWTG90cw0RDol8fXpuX7iglJliFVRAJVhGK4FZH/+WA/qOB/+YAAAAIszHwTc8PxofKKaTirmLWXxMCHVHCItfIJViGv+eAP+hADtDVZafqXlSItOLKatgAC8kGNuEDumMEP+bAFNAJwAXQfmhOPL//9bW0cRrAMl0AHBEBPmSAP+SBbxyEV5HKf+zAP+KAP+lEP+pNsBuANdsAMhvAF88Bvx3CP+dBPmUAzUzMNF+DzEoJ6hpC41QAFE+H9OLK8qeakRAQf9dDvxrDuCACEk7JLJrBicvO7eSaQ0XIamZlenErbaejrd4IvyJBvl/CPmNBJxnH35vYbGYhM+ulJiCbwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFewAAACwAAAAAEAAQAAAI+wABAHCwIcUNgQgTCiTwgIMKHEYUKiwAocOKHEeqjInjJxGlRSJuATAQwQMLHUiskJHzR1ElUKxwATgg4UOLHUmulJkDaJGZUK1yCZwAwgUPJVjM0AnEyJIoV7oEUgjxoseSLGfqZGl0adSrXQAQVBABwwcTLWjsCDKDiRQsgQksjIjxo8mWNHcGOcpUKhaAAAoukIgRwwkXNXgIazIli5eABRhKyADypMsawo82nZrVawCDDCZmBIHihU0eQpA4oaLlC0ADDSdoCInypY2eQpE6par1CyGKGkOkgHGzx5AkT6psKbRBZEqYN3wOTfq0SiKAIlTEwOmDSGFAADs=">
	
	<title>Pet Metrix</title>
	<style>

*:not(hr), *::after, *::before {box-sizing: border-box;margin:0;padding:0;border:0}ul {list-style-type: none}
body{padding: 33px 0;background-image: linear-gradient(rgba(0,0,0,0.9), #013301); 
	background-color: #013301;
	background-repeat: no-repeat;
	text-align: center;
	color: white; font-family: sans-serif;
	}
.d3{padding: 0 22px;text-align: left;color: black;}
.d3:nth-child(odd){background:white;}
.d3:nth-child(even){background:#fed;}
#ajo0 .d3:hover{background: cyan;}
header{margin:0 auto;text-align: center;max-width:666px;}
.pec{
	cursor: pointer;text-decoration: none;
	border-bottom:1px solid black;
	}
td{border:1px solid navy;}
.ihead{padding: 5px 0; background: #f0f8ff;}
.ileft{padding: 0 12px; text-align: left;}
.icenter{text-align: center;}
.a:has(mark){text-decoration: none;}
.a{
	text-decoration: underline; 
	text-decoration-color: green;
	cursor: pointer;
	}
label{padding: 0 0 0 12px;}
mark{background: springgreen;}
.nom{text-decoration: underline;cursor: pointer;}
.buts button{margin:2px;padding:5px 23px;font-size:20px; cursor:pointer;border-radius:6px;}
.buts span{padding:5px;font-size:20px;}
.alf button{
	margin:2px;
	padding:5px;
	font-size:15px;
	cursor:pointer;
	border-radius:6px;
	}
table{width: 100%;
	background:#e0ffff;
	border-collapse: separate;
	border:4px solid blue;}
.vo{font-size: 30px;}	

img{transform:translate(0,2px)}
[color='red']{display: none;}
[color='blue']{display: none}
.acti { /*подсветка в предбаннике*/
    color: #000; /* Цвет активных ссылок */
	font-weight: bold;
	background-color: lime;
   }
.win{
	margin:0 auto;
	width:80%;
	display: grid; 
	grid-template: 145px 80px/ 3fr 3fr;
	border:2px solid white;
	border-radius: 15px 30px 0px 15px;
	}
#ajo0{color: black;background: #fed;overflow-y: scroll;border-radius: 15px 0 0 0;}
#ajo1{color: black;}	
#ajo2{color: black;padding: 15px 0;background: white;border-radius: 0 0 0 12px;
	display:flex;align-items:center;border-top:2px solid purple;}
#ajo3{overflow-y: scroll; color: black;background: #fed;border-radius: 0 0 0px 0;}	
#ajo4{}
#ajo5{
	position: relative;
	background: #013301; background-image: url(sign00.jpg); 
	background-size: cover;border-radius: 0 30px 0 0;
	background-position: center center;}
#ajo6{margin:4px auto 0; max-width:1080px;color: black; background: yellow;}

.pot{width:120px; aspect-ratio:1;background: transparent;
position: absolute;bottom:-3px;right:25px;}
.pot img.dd{margin-top:-5px;display:block;width:124px; aspect-ratio:1;}
#form1{padding:5px; background:maroon;}
#form2{padding:5px; background:navy;}
#form3{padding:5px; background:black;}
#form4{padding:5px; color: black;background:purple;display:flex;flex-direction:column;}
.addact{margin:0 3px;padding:3px 7px;}

#h11 mark.f{background: yellow;border:2px solid red;}
#h11 mark{background:#999;}
#git1,#git2,#git3{color:white;}
.bla_r,.bla_m{width:fit-content;display:grid;
	grid-template:1fr 1fr/1fr 1fr 1fr;border:3px solid violet;text-align: center;}
.bla_d{width:fit-content;display:grid;
	grid-template:1fr 1fr/1fr 1fr;border:3px solid violet;text-align: center;}
.blatop{grid-area:1/1/1/4;color: black; background-color:white;}
.like{margin: 4px;display:inline-block;}
.x3{grid-area:2/1/3/4;}
.x3:hover{background:yellow;}

.bla_r button:nth-child(2){position: relative;}
.bla_r button:nth-child(2):after{content:'';width:19px;aspect-ratio:1; 
	border:1px solid black;
	border-radius:50%;position: absolute;top:1px; left:50%;
	transform:translate(-50%,0);}
.bn1,.bn2,.bn3{type: button;padding:3px;cursor: pointer;border:1px solid blue;}
.bn1:hover{background:yellow;}

#ban{margin:0 auto; display:flex;width:90%;max-width:1080px;}
#arrow1{width:35px;background: gold;clip-path: polygon(0 50%, 100% 0, 100% 100%);}
#arrow2{width:35px;background: gold;clip-path: polygon(100% 50%, 0 0, 0 100%);}
#tot{width:444px;height:222px;}
	</style>

</head>
<body text="black" bgcolor="white">


<?php
$cu=mysqli_connect("127.0.0.1","root","","pet3");
if (!$cu){
	echo 'база ноу коннект';	
}else{
//--------------------------------------------   
	$su_grz=mysqli_query($cu,"SELECT * FROM `grz` ORDER BY `nom`"); //
	$num=intval((mysqli_num_rows($su_grz)-1) / 5);//замер базы в страницах	
	
	$acts=mysqli_query($cu,"SELECT * FROM `acts`"); //	
	$numActs=intval(mysqli_num_rows($act));//замер колво актов
	mysqli_query($cu, "TRUNCATE TABLE `koys`");// очистка таблицы
	$su_grz=mysqli_query($cu,"SELECT * FROM `grz` ORDER BY `nom`");
	while($i=mysqli_fetch_assoc($su_grz)){
		mysqli_query($cu,"INSERT INTO `koys` (`g`) VALUES (".$i['id'].")");// цивилизованный peps		
	}
	
	
}
//-----------------------------------
	mysqli_close($cu);  
?>

<header>
	<h1 id="h1">Вымышленные Метрические книги.</h1>	
	Условные обозначения: 
	<b>R</b>-родился; R-родил; r-воспреемник новорожденного; 
	<b>M</b>-вступил в брак; M-родитель новобрачного; m-свидетель на бракосочетании; 
	<b>D</b>-умер; d-родственник умершего.	
</header>


<section>
	<article>
		<div class="alf">
			<button onclick="lev=0;leventer();"> А </button>
			<button onclick="lev=0;leventer();"> Б </button>
			<button onclick="lev=0;leventer();"> В </button>
			<button onclick="lev=0;leventer();"> Г </button>
			<button onclick="lev=0;leventer();"> Д </button>
			<button onclick="lev=0;leventer();"> Е </button>
			<button onclick="lev=0;leventer();"> Ж </button>
			<button onclick="lev=0;leventer();"> З </button>
			<button onclick="lev=0;leventer();"> И </button>
			<button onclick="lev=1;leventer();"> К </button>
			<button onclick="lev=1;leventer();"> Л </button>
			<button onclick="lev=1;leventer();"> М </button>
			<button onclick="lev=1;leventer();"> Н </button>
			<button onclick="lev=1;leventer();"> О </button>
			<button onclick="lev=1;leventer();"> П </button>
			<button onclick="lev=1;leventer();"> Р </button>
			<button onclick="lev=2;leventer();"> С </button>
			<button onclick="lev=2;leventer();"> Т </button>
			<button onclick="lev=2;leventer();"> У </button>
			<button onclick="lev=2;leventer();"> Ф </button>
			<button onclick="lev=2;leventer();"> Х </button>
			<button onclick="lev=2;leventer();"> Ц </button>
			<button onclick="lev=2;leventer();"> Ч </button>
			<button onclick="lev=2;leventer();"> Ш </button>
			<button onclick="lev=2;leventer();"> Щ </button>
			<button onclick="lev=2;leventer();"> Э </button>
			<button onclick="lev=2;leventer();"> Ю </button>
			<button onclick="lev=2;leventer();"> Я </button>
		</div>
		<div class="buts">
			<button onclick="lev=0;leventer();"> 0 </button>
			<button onclick="lev=(lev>0)?(lev-1):0;leventer();"> &lt; </button>
			<span id="ajo4">0</span>
			<button onclick="lev=(lev<levmax)?(lev+1):levmax;leventer();"> &gt; </button>
			<button onclick="lev=levmax;leventer();"> <? echo $num; ?> </button>
		</div>		
	</article>
	<div class="win">	
		<div id="ajo0"></div>
		<div id="ajo5"></div>
		<div id="ajo2"></div>
		<div id="ajo3">Стихия, которая покровительствует Быку, может смягчать или усиливать его качества. Всего в восточном гороскопе пять стихий, у каждой свой характер и преимущества (огонь, вода, металл, дерево, земля). Бык — символ трудолюбия и выносливости, терпения и упорства.</div>
	</div>
</section>


<section id="ban">
	<div id="arrow1"
	onclick="let i=+act.innerText;i=1+(i+<? echo ($numActs-2) ?>)%<? echo $numActs ?>;act.innerText=i;rose.value=i;lot.value=i;
	$('#ajo6').load('goat5.php?act='+i);// баня
	"></div>
	<div  id="ajo6"></div>
	<div id="arrow2"
	onclick="let i=+act.innerText;i=1+i%<? echo $numActs ?>;act.innerText=i;rose.value=i;lot.value=i;
	$('#ajo6').load('goat5.php?act='+i);// баня
	"></div>
<!--  -->	
</section>

<footer>
По материалам сайта <a href="https://www.familysearch.org" style="color: #ffff00">familysearch.org</a>
</footer>

<footer id="wanted">4</footer>
<footer id="act">4</footer>
<div style="margin: 0 auto;display: flex;width:fit-content;">
	<button class="addact"
	onclick="acta(1);// добавление акта	
	">Add Born</button>
	<button class="addact"
	onclick="acta(2);// добавление акта	
	">Add Marry</button>
	<button class="addact"
	onclick="acta(3);// добавление акта	
	">Add Death</button>	
</div>
<form id="form1"
onsubmit="
event.preventDefault();
post('form1.php', 
	$('#form1').serialize(),
	function(response){hoy.value=response;}
	);
"
method="post" action="">
<input type="text" name="who" value="Губка Боб">
<textarea name="txt">Живет на дне океана.</textarea>
<textarea name="img">
&lt;img class="dd" src="data:image/gif;base64,R0lGODlhEAAQAPcAAOriJ83UI6jEGsfSIungKL7MHtzYJe3iK+3iKevgLO3gJ+vhKc/TJdPXLdPWKrzJOejiKpy/FHmwDavGF/TkI8fVEfDuFvPiGejAK+XMK+3iI83QJKW/FfPlK/XkJunhJ+riLffoKvruJ//qHNDEN7y3kMC9p7+KUufUJMbKO//7Lv/+Kv/yK+ffJ8LPIOTfKOrhKuvgKa+rH2JkQezt//3///////HAqfPmD4WADCEAFZKDKf73Mp/SGHuzF8/TIO3iLvbrKe7lF8jFq/nx8fPv8PXl9tTTLDYIGkQAEEYMFLi2KOrvHejhLOvhKu/lKpuVFayqvgBTXgAtP6nV1cnFDoB6EDoAAi4AAE0bNN/XJezcNOviLPTqKsa5G4WGewBMZAALHqTAyL623OjbF9fYJcfS+GFDO7NkobqrSurOTO3fLOzjKdnPJtrRF8/An77N3q7G3MXHb66kN/PsF/vzF6Osz1w/L7dglKCAaevOSfXrKfvqKPzzBNzQSLqvma+hqPDZC9zPE+3iGvfrD11KZS8BAKhRgpJ/YO7DV+viL+vfLYeBIXl4Tw1qfgBbgI+mtpKSr+jiGfr2Lvv//4p/dst0trSlTevOSurhJ/rvLsbHq//+/wAwPQAHEaPCyNjSG6KTGUkTMCcAAD8EKc3HLuvbLuzhK+reLY6LBaOlqrfIzajJy8TPLEocGEcADT0ABY9/Jv/9J+jgKPPoKrWtGmprSvri5eixX5V5ESwADD8AEqSbK//4Ov/vKLTHHezhL/LmLuriJujgGrKvabzA3c/U/8yidtfOGmZfK6qiJPv3M5rOFoK5DeHbK+nhK+vhK+ngK8/TIvHnKO/hGOvjEOHXD+nDF+a7J+rPNvryJ/fsJ63DFbHJGPrpLOriLOjjKOffLM/TI+ziLO3iLOzfLOriLufiLt7cLcnQSsLLUgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFewA2ACwAAAAAEAAQAAAI/wABQAABA4gTLmsWKMp0ygkwaOACRAgRI8iTLmz2LNKEilawaOEESBAhQwgUL234MKKTqpYwaeIGTBgxY0iUL276NNqkytawac8IUCBBw4bRN35scDJKjBq0AhVK1CAiBQycP446rbJRrNo4AxZM2CgyJUwcQI88sbJhzBq0AxdO3LBBRYycQJA+2bh17FoMBBhQ4DBiY8wcQZGM4kKGjVyCDClyHKlChs4gSaBa5UqWrZwCDSp0ILFSpg6hSaFc6VKmzdyCDSt2JLlixk4hSqJe7Vq27RwDDix4KMFy5o6hSqNg8WLGDUaDDi16LMmCBs8hS6Ri9WrWDZ0DDy58MCDRkiYPokulZPly5i3dgw8vfjTZokZPIkymZv169k1dQAA7"&gt;
</textarea>
<input type="submit" value="form1">
</form>



<form id="form2"
onsubmit="
event.preventDefault();
post('form2.php', 
	$('#form2').serialize(),
	function(response){tot.value=response;}
	);


"
method="post" action="">
<label>Group<input type="number" name="g" value="13" id="hoy"></label>
<label>Act<input type="number" name="act" value="2" id="rose"></label>
<input type="submit" value="form2">
</form>

<form id="form3"
onsubmit="
event.preventDefault();
$.ajax({
			url:     'form3part1.php', //Адрес
			type:     'POST',
			dataType: 'html',
			data: $('#form3').serialize(), 
			success: function(response) { 
			art.innerHTML=response;
			h11.innerHTML='<table>'+tot.value+'</table>';
			jQuery.ajax({
						url:     'form3part2.php', //Адрес 
						type:     'POST', 
						dataType: 'html', 
						data: $('#form3').serialize(), 
						success: function(response) { 
						foo(eval(response));
					},
					error: function(response) { 
					}
				});			
			
		},
		error: function(response) { 
		}
	});
"
method="post" action="">
<label>Act<input type="number" name="act" value="2" id="lot"></label>
<textarea name="txt" id="tot">
</textarea>
<input type="submit" value="form3">
</form>




<form id="form4"
onsubmit="
event.preventDefault();
post('form4.php',
	{avon: JSON.stringify(avon)},
	function(response){console.log(response)});
"
method="post" action="">
	<div id="h11" contenteditable='true'>

	</div>	
	<input type="submit" style="margin:0 auto;width:100px;" value="form4">
</form>

<main id="art"></main>


<script src="jq/jquery-2.1.0.min.js"></script>
<script>
<?php
if (isset($_GET['ava']))$avaid=$_GET['ava']; else $avaid=4;		
$cu=mysqli_connect("127.0.0.1","root","","pet3");
if (!$cu){
	echo 'база ноу коннект';	
}else{
//--------------------------------------------   
	$avas=mysqli_query($cu,"SELECT * FROM `ava` WHERE id=$avaid");
	$ava=mysqli_fetch_assoc($avas);
	$svet=$ava['svet'];
	$act=$ava['link'];
	$g=$ava['g'];	
	$grzs=mysqli_query($cu,"SELECT * FROM `grz` ORDER BY `nom`"); //
	$m=0;
	while($i=mysqli_fetch_assoc($grzs)){		
		if($i['id']==$g) break;
		$m++;
		}
	$sz=5;
	$pg=$yy=($m-$m%$sz)/$sz;//столбец. учел что нумерация с единицы
	$koy=$xx=$m % $sz;// строка	
}
//-----------------------------------
	mysqli_close($cu); 	
?>
/*
http://pet/index.php?ava=1
http://pet/index.php?ava=4
http://pet/index.php?ava=8
http://pet/index.php?ava=13

document.addEventListener("DOMContentLoaded", ()=>{
	$('#ajo6').load('goat5.php?i=<? echo $svet ?>&act=<? echo $act ?>');// баня	
	$('#ajo2').load('spis5.php?k=1&koy=<? echo $koy ?>&pg=<? echo $pg ?>&id=ix<? echo $avaid ?>');//п.б	
	$('#ajo0').load('spis5.php?k=5&pg=<? echo $pg ?>&id=ix<? echo $avaid ?>');// лист	
	$('#ajo5').load('nes5.php?i=<? echo $avaid ?>');// портрет с авы
	$('#ajo3').load('ano5.php?i=<? echo $avaid ?>');// анотация с авы
	});*/
document.addEventListener("DOMContentLoaded", ()=>{
	$('#ajo6').load('goat5.php?i=<? echo $svet ?>&act=<? echo $act ?>');// баня	
	$('#ajo2').load('spis5.php?k=1&avaid=<? echo $avaid ?>');//п.б	
	$('#ajo0').load('spis5.php?k=5&avaid=<? echo $avaid ?>');// лист	
	$('#ajo5').load('nes5.php?i=<? echo $avaid ?>');// портрет с авы
	$('#ajo3').load('ano5.php?i=<? echo $avaid ?>');// анотация с авы
	});
function leventer(){//текущая страница списка (лев)
	$('#ajo4').load('lev5.php?count='+lev);// счетчик
	alert(lev);
	$('#ajo0').load('spis5.php?k=5&pg='+lev+'&avaid='+wanted.innerHTML);// лист
	}

var lev=0;// страница ноль

//leventer();


var levmax=<?php echo "$num" ?>;// страниц в базе групп

function fx(g){// клик на полосе
	//$('#ajo5').load('von5.php?i='+g);// портрет
	//$('#ajo3').load('ann5.php?i='+g);// аннотация
	$('#ajo2').load('spis5.php?k=1&g='+g);// п/б	
}

function fy(ava){// клик на листе
	//$('#ajo6').load('goat5.php?i='+svet+'&act='+act);// баня
	$('#ajo2').load('spis5.php?k=1&avaid='+ava);// п/б
	$('#ajo0').load('spis5.php?k=5&avaid='+ava);// лист
	//$('#ajo5').load('nes5.php?i='+ava.id);// портрет
	//$('#ajo3').load('ano5.php?i='+ava.id);//	анотация
}


function fb(ava){// клик на предбане
	//$('#ajo6').load('goat5.php?i='+svet+'&act='+act);// баня
	$('#ajo2').load('spis5.php?k=1&avaid='+ava);// п/б	 
	$('#ajo0').load('spis5.php?k=5&avaid='+ava);// лист
	//$('#ajo4').load('lev5.php?count='+pg);// счетчик
	//lev=pg;// страница
	//$('#ajo5').load('nes5.php?i='+ava.id);// портрет
	//$('#ajo3').load('ano5.php?i='+ava.id);//	анотация
}


function fj(avaid,svet,act,koy,pg){//клик на бани
	$('#ajo6').load('goat5.php?i='+svet+'&act='+act);// баня
	$('#ajo0').load('spis5.php?k=5&pg='+pg+'&id='+avaid);// лист
	$('#ajo2').load('spis5.php?k=1&koy='+koy+'&pg='+pg+'&id='+avaid);// п/б	
	$('#ajo4').load('lev5.php?count='+pg);// счетчик	
	lev=pg;
	$('#ajo5').load('nes5.php?i='+avaid);// портрет	(тут незаморачивался в сторку)
	$('#ajo3').load('ano5.php?i='+avaid);//	анотация
}
function acta(x){// добавление акта
	post('act.php',{type: x},()=>{});
}

var r,n;
var avon=[];
function foo(x){
	avon=x.map(i=>i);
	r=[...document.querySelectorAll('#h11 mark')];
	n=0;
	r.forEach(x=>{x.classList.remove('f');});
	r[n].classList.add('f');
	avon.forEach((x,i)=>{if (i<=r.length){
		x['he']=r[i].innerText;
		x['svet']=1+i;
		}});	

	let bn1s=[...document.querySelectorAll('.bn1')];
	bn1s.forEach((x,i)=>{x.addEventListener('click',()=>{	
		const j=i/3|0;	
			avon[n]['g']=+x.parentNode.dataset.g;
			avon[n]['bj']=+x.parentNode.dataset.bj;
			avon[n]['role']=1+i%3;
			avon[n]['id']=+x.parentNode.dataset.id;//5;
			r[n].classList.remove('f');
			n++;n=n%r.length;		
			r[n].classList.add('f');
			console.clear();
			console.table(avon);
		})});
	let bn2s=[...document.querySelectorAll('.bn2')];
	bn2s.forEach((x,i)=>{x.addEventListener('click',()=>{	
		const j=i/3|0;
			avon[n]['g']=+x.parentNode.dataset.g;
			avon[n]['bj']=+x.parentNode.dataset.bj;
			avon[n]['role']=3+1+i%3;	
			avon[n]['id']=+x.parentNode.dataset.id;
			r[n].classList.remove('f');
			n++;n=n%r.length;
			r[n].classList.add('f');
			console.clear();
			console.table(avon);
		})});	
	let bn3s=[...document.querySelectorAll('.bn3')];
	bn3s.forEach((x,i)=>{x.addEventListener('click',()=>{	
		const j=i/2|0;
			avon[n]['g']=+x.parentNode.dataset.g;
			avon[n]['bj']=+x.parentNode.dataset.bj;
			avon[n]['role']=6+1+i%2;		
			avon[n]['id']=+x.parentNode.dataset.id;
			r[n].classList.remove('f');
			n++;n=n%r.length;
			r[n].classList.add('f');

			console.clear();
			console.table(avon);
		})});	
		
	let x3z=[...document.querySelectorAll('.x3')];	
	x3z.forEach((x,i)=>{x.addEventListener('click',()=>{	
			r[n].classList.remove('f');
			n++;n=n%r.length;
			r[n].classList.add('f');
			console.clear();
			console.table(avon);		
		})});		
	
}

function post(addr,data,fn){
$.ajax({
			url:     addr,//, //Адрес 
			type:     'POST', //Тип запроса
			dataType: 'html', //Тип данных
			data: data,
			success: fn,
		error: function(response) { 
		}
	});		
}
</script>
</body>
</html>



