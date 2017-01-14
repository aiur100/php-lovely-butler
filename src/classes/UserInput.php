<?php

/**
 * Class UserInput
 */
class UserInput
{
    /**
     * @return string
     */
    public static function getInput($message = null){
        if(!is_null($message))
            echo $message.":  ";

        $handle = fopen ("php://stdin","r");
        return fgets($handle);
    }
}