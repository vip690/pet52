<?php
header ("Content-Type: text/html; charset=utf-8");

// сопоставление переносится в базу
$cu=mysqli_connect("127.0.0.1","root","","pet2");
if (!$cu){
	echo 'база ноу коннект';	
}else{
//----------------------------------
	mysqli_query($cu,"SET NAMES utf8"); 
//-------------------------------------------- 
if($_POST['avon']){	
    $avon = json_decode($_POST['avon'],true);
    foreach($avon as $i){
		$bj=intval($i['bj']);
		$id=intval($i['id']);
        $g=intval($i['g']);
		$link=intval($i['link']);
		$role=intval($i['role']);
		$svet=intval($i['svet']);

		$god=mysqli_real_escape_string($cu,$i['god']);         
		$coop=mysqli_real_escape_string($cu,$i['coop']);		
		$he=mysqli_real_escape_string($cu,$i['he']);       
        $v=mysqli_query($cu,"UPDATE ava 
			SET id='$id',
			g='$g',		
			link='$link',
			coop='$coop',
			he='$he',
			role='$role',
			svet='$svet',
			bj=0
			WHERE id='$id'");		
	if ($bj>0){/// если был бомжом
	echo "-".$i['he'];
		$v=mysqli_query($cu,"UPDATE grs 
			SET svet='$svet'
			WHERE id='$id'");
	}		
    }
}
//----------------------------------
	mysqli_close($cu); 
}	
?>
