<?php

class AgeException extends Exception
{
    public function showErrorMessage()
    {
        $userMessage = $this->getMessage();
        // $errorMessage = "Test, error message";

        return $userMessage;
    }
}