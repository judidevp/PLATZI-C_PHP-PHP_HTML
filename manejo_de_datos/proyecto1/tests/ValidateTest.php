<?php
use PHPUnit\Framework\TestCase;
use App\Validate;
class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email= Validate::email('juan@gmail.com');
        $this->assertTrue($email);
    }
    public function test_url()
    {
        $url= Validate::url('https://juandiego.com');
        $this->assertTrue($url);
    }
    public function test_password()
    {
        $pass= Validate::password('asasSD4');
        $this->assertTrue($pass);
    }
}