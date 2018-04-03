<?php

namespace NotificationChannels\Infobip\Exceptions;

class CouldNotSendNotification extends \Exception
{
    public static function serviceRespondedWithAnError($response)
    {
        return new static("Descriptive error message.");
    }
    
    public static function invalidReceiver($response)
    {
        return new static("Descriptive error message.");
    }
}
