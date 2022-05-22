<?php

use PHPUnit\Framework\TestCase;

class UserTest2 extends TestCase
{
    public function testNotifyReturnsTrue()
    {
        $user = new User2('dave@example.com');

       $mailer = $this->createMock(Mailer2::class);

       $mailer->expects($this->once())
       ->method('send')
       ->willReturn(true);

       $user->setMailer($mailer);
       
       $this->assertTrue($user->notify('Hello!'));
    }
}