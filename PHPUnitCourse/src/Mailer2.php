<?php

/**
 * Mailer2
 * 
 * An example mailer class
 * 
 */
class Mailer2
{

    /**
     * Send a message
     * 
     * @param string $email Recipient email address
     * @param string $message Content of the message
     * 
     * @throws InvalidArgumentException If $email is empty
     * 
     * @return boolean
     */
    public function send(string $email, string $message)
    {
        if(empty($email))
        {
            throw new InvalidArgumentException;
        }

        echo "Send '$message' to '$email'";

        return true;
    }
}