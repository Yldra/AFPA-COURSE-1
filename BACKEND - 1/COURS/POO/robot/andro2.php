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
	// surcharge de méthode. 
	// override
	public function greet()
	{
		return 'Hi';
	}
}
// Override de méthode

$robot = new Robot();
echo $robot->greet(); // Hello

$android = new Android();
echo $android->greet(); // Hi!

?>