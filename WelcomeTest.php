<?php
    use PHPUnit\Framework\TestCase;
    require 'Welcome.php';
    class WelcomeTest extends TestCase {
        protected function setup(){
            $this->welcome = new Welcome();
        }

        protected function tearDown(){ 
            $this->welcome = NULL;
        }
       
	public function testGreet(){
            $result = $this->welcome->greet();	    
            $this->assertEquals("Welcome to DevOps on AWS",$result);
        }
     }
?>

