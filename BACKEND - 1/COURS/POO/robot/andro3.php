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
		$greeting = $this->greet();
		return $greeting . ' from Android.';
	}
}

$android = new Android();
echo $android->greet(); 

// ça ne va pas fonctionner, on ne peut pas utiliser $this dans le fils
// Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 262144 bytes) 
// in /Users/jam/Desktop/andro3.php on line 1.