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
}
