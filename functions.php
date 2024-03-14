<?php

function vd(mixed ...$values) : mixed
{
	
	for($i = 0; $i < count($values); $i++){
		var_dump($values[$i]);
	}
	die;
}

function ve(mixed ...$values) : mixed
{
	
	for($i = 0; $i < count($values); $i++){
		var_export($values[$i]);
		echo '<br>';
	}
	die;
}

function vp(mixed ...$values) : mixed
{
	
	for($i = 0; $i < count($values); $i++){
		print_r($values[$i]);
		echo '<br>';
	}
	die;
}

function formatData($date)
{
	if (isset($date) || $date != '') {

		return date('d/m/Y', strtotime($date));
	}
}

function formatDataHora($date)
{
	if (isset($date) || $date != '') {

		return date('d/m/Y H:i', strtotime($date));
	}
}

function text_encode($string, $to_encoding = 'UTF-8', $from_encoding = 'ISO-8859-1')
{

	return mb_convert_encoding($string, $to_encoding, $from_encoding);
}

function text_decode($string, $to_encoding = 'ISO-8859-1', $from_encoding = 'UTF-8')
{

	return mb_convert_encoding($string, $to_encoding, $from_encoding);
}

function diasCorridos($date)
{
	if (isset($date) || $date != '') {
		$datetime1 = date_create($date);
		$datetime2 = date_create(date("Y-m-d"));
		$interval = date_diff($datetime1, $datetime2);
		return $interval->format('%a dias');
	} else {
		return '';
	}
}

function sanitizeString($string)
{
	if ($string !== mb_convert_encoding(mb_convert_encoding($string, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32'))
		$string = mb_convert_encoding($string, 'UTF-8', mb_detect_encoding($string));
	$string = htmlentities($string, ENT_NOQUOTES, 'UTF-8');
	$string = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $string);
	$string = html_entity_decode($string, ENT_NOQUOTES, 'UTF-8');
	$string = preg_replace(array('`[^a-z0-9]`i', '`[-]+`'), ' ', $string);
	$string = preg_replace('/( ){2,}/', '$1', $string);
	// $string = strtoupper(trim($string));
	return $string;
}

function convBool(bool $var) : int
{
	if($var):
		return 1;
	endif;

	return 0;
}

