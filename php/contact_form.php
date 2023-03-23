<?php

if (isset($ POST[ 'submit' ])) {
	$name = $ POST [ 'name' ];
	$subject = $ POST ['service'];
	$company = $ POST ['company'];
	$mailFrom = $_POST ['email'];
	$message = $ _POST [' message'];
	$mailTo = "dcndaviddcn@gmail.com";
	$headers = "From: ". $mailFrom;
	$txt = "You have received an e-mail from your porfolio website \n\n Name:" $name."\n Organization".$company " \n\n". $message;
	mail ($mailTo, $subject, $txt, $headers) ; 
	header ("Location: index.html?mailsend");

}