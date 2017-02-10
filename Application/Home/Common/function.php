<?php
function test()
{
	echo "testfunc";
}

function getWhois($domain){
	$msg = array();
	Vendor('PHPWhois.PHPWhoisAutoload');//load the lib to get the whois infomation
	$phpwhois = new PHPWhois($domain);
	$whois_answer = $phpwhois ->info();
	$msg[0] = $whois_answer;
	$msg[0] = str_replace("\n","<br>",$msg[0]);
	if ($phpwhois->isAvailable()) { 
		if(strstr($whois_answer,"No match for"))
		{
			$msg[1] =  "N";//no available
		}else{
			$msg[1] =  "Y";//available
		}
	} else {
		 $msg[1] =  "N";//have registered!
	}
	return $msg;


}




?>
