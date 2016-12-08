<?php

function toNumberArray(array $stringArray) : array 
{
	$stringArraysize=sizeof($stringArray);
	$result= []; 
	for ($i = 0; $i < $stringArraysize; $i++) 
	{
		$float = floatval($stringArray[$i]);
		if($float && intval($float) != $float)
		{
			$result[$i]=floatval($stringArray[$i]);
		}
		else
		{
			$result[$i]=intval($stringArray[$i]);
		}
	} 	
	return $result;
}

?>