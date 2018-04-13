<?php
require_once '../models/User_model.php';
use PHPUnit\Framework\TestCase;
class UserModelTest extends TestCase {
    public function testInstanceOf_userModel()
    {
            $this->assertInstanceOf("User_model",
               User_model::getInstance());
        
    }
    public function testPasswordsMatched()
    {
        $this->assertNull(User_model::validate_to_test_match());
    }
    public function testPasswordsmisMatched()
    {
        $this->assertEquals(User_model::validate_to_test_mismatch(),"Passwords are mismatched!");
    }
}
