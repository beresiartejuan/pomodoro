<?php

function encrypt($text, $key = __salt__){
	return Defuse\Crypto\Crypto::encryptWithPassword($text, $key);
}

function decrypt($pass, $key = __salt__){
	return Defuse\Crypto\Crypto::decryptWithPassword($pass, $key);
}