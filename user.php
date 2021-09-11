<?php 

$ip = "103.113.152.106"; // get IP from server 

$secret = "13fd8d7a673eaceb"; 

$host = "139.59.3.83"; // update WOWZA server host

$url= "http://".$host.":1935/";

$stream = "amit/anik"; // update stream with 'name/name'

$start = time(); // get current time 

$end = strtotime("+30 minutes"); // set expire time


$tokenName = "wowzatoken"; // token as defined in Engine

$hash = ""; 

$pass = $stream."?".$ip.'&'.$secret."&{$tokenName}endtime=".$end; 

$hashed = ""; 

$hashed = hash('sha256', $pass, true); 

$base64Hash = strtr(base64_encode($hashed), '+/', '-_'); // generated hash


// generated URL
$playbackURL = $url.$stream."/playlist.m3u8?"."{$tokenName}endtime=".$end."&{$tokenName}hash=".$base64Hash;


printf("$playbackURL".'<br/><br/>'); 

//$URL = preg_replace("/(\&)$/","", $playbackURL);





?>