<?php

/**
 * User2
 * 
 * An example user class
 */
class User2
{

    /**
     * Email address
     * @var string
     */
    public $email;

    protected $mailer;

    /**
     * Constructor
     * 
     * @param string $email The user's email
     * 
     * @return void
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function setMailer(Mailer2 $email)
    {
        $this->email = $email;
    }

    /**
     * Send the user amessage
     * 
     * @param string $message The message
     * 
     * @return boolean
     */
    public function notify(string $message)
    {
        return $this->mailer::send($this->email, $message);
    }
}
