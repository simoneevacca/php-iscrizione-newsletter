<?php
/**
 * Generate an array with text and bootstrap class for create an alert message 
 * @param string
 */
function correctMail($mail, $path)
{
    if (str_contains($mail, "@") && str_contains($mail, ".")) {
        header("location: $path");
    } else {

        return [
            'text' => 'Attenzione! La mail inserita non è valida, controlla e riprova.',
            'bClass' => 'danger',
            'mail' => $mail
        ];
    }
}

/**
 * Check if the mail was inserted
 * @param string
 */
function checkMail($mail)
{
    if (isset($mail)) {
        return true;
    }
}