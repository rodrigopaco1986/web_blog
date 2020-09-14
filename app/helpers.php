<?php

/**
* Get first n words from a string.
*
* @return string
*/
function shortenString($string, $nWords)
{
	$retval = $string;

	$array = explode(" ", $string);
	if (count($array) <= $nWords)
	{
		$retval = $string;
	} else {
		array_splice($array, $nWords);
		$retval = implode(" ", $array) . " ...";
	}
	
	return $retval;
}

function getPlural($word, $count)
{
	if ($count > 1)
	{
		return \Illuminate\Support\Str::plural($word);
	}

	return $word;
}