<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('eduer@eduerpj.com');
        $this->assertTrue($email);

        $email = Validate::email('eduer@@eduerpj.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://eduerpallaresjimenez.com');
        $this->assertTrue($url);

        $url = Validate::url('eduerpallaresjimenez.com');
        $this->assertFalse($url);
    }

    public function test_password()
    {
        $password = Validate::password('654gfhj1D3115');
        $this->assertTrue($password);

        $password = Validate::password('kdjfj');
        $this->assertFalse($password);
    }


}
