<?php
/*function getWhois($domain){
	$msg = array();
	Vendor('PHPWhois.PHPWhoisAutoload');//load the lib to get the whois infomation
	$phpwhois = new PHPWhois($domain);
	$whois_answer = $phpwhois ->info();
	$msg[0] = $whois_answer;
	$msg[0] = str_replace("\n","<br>",$msg[0]);
	$flag = $phpwhois->isAvailable();
	if(strstr($whois_answer,"No match for")||strstr($whois_answer,"No Domain exists"))
	{
		$msg[1] =  "Y";//we can use it!
	}else{
		$msg[1] =  "N";//we can not use it
	}
	return $msg;


}*/