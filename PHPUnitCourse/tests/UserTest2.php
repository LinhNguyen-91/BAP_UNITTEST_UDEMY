<?php

use PHPUnit\Framework\TestCase;

class UserTest2 extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User2('dave@example.com');

        $user->setMailerCallable(function()
        {
            echo "mocked";

            return true;
        });
       
        $this->assertTrue($user->notify('Hello!'));
    }
}