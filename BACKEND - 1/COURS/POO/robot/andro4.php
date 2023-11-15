<?php


class Robot
{
	public function greet()
	{
		return 'Hello!';
	}
}


class Android extends Robot
{
	public function greet()
	{
		$greeting = parent::greet();
		return $greeting . ' from Android.';
	}
}


$android = new Android();
echo $android->greet(); 

// Hello! from Android   

?>
