<?php

// class Robot simple
class Robot
{
	public function greet()
	{
		return 'Hello!';
	}
}

// Android enfant de Robot.
class Android extends Robot
{	

}

// programme test 
$android = new Android(); // instanciation de la classe Robot
echo $android->greet(); 
// Hello!
// Héritage typique.

?>