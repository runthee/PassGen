#!/data/data/com.termux/files/usr/bin/php
<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$bersih="cls";
} else {
$bersih="clear";
}
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo "\n$yellow
 ______                      _______               
(_____ \                    (_______)              
 _____) ) _____   ___   ___  _   ___  _____  ____  
|  ____/ (____ | /___) /___)| | (_  || ___ ||  _ \ 
| |      / ___ ||___ ||___ || |___) || ____|| | | |
|_|      \_____|(___/ (___/  \_____/ |_____)|_| |_|";
echo "\n$blue
Author  : Cvar1984
Code    : PHP
Github  : http://github.com/Cvar1984
Team    : BlackHole Security
Version : 1.0 ( Alpha )
Date    : 17-03-2018\n";
echo $red."=========================== Cvar1984 ))=====(@)>".$green."\n";
$string=str_shuffle("abcdAbcdABCD");
	$array=["1","2","3","4","5","6","7","8","9","0"];
	$random=array_rand($array);
	$rand=$array[$random];
	$a=$rand;
	$b=$rand;
	$c=$rand;
	$d=$rand;
	$e=$a*$b*$c*$d;
	$f=$string.$e.$string;
	$out=md5(sha1($f));
echo $green.$out."\n";
$tulis=fopen("pass.txt", "w");
fwrite($tulis,$out);
fclose($tulis);
die($red."Password Generated".$blue." -> ".$green."pass.txt"."\n");