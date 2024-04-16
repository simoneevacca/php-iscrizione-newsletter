<?php  
/**
 * Generate an array with text and bootstrap class for create an alert message
 * @param string
 */
function correctMail($mail)
{
    if (str_contains($mail, "@") && str_contains($mail, ".")) {
        return [
            'text' => 'OK',
            'bClass' => 'success'
        ];
    }
    return [
        'text' => 'FAIL',
        'bClass' => 'danger'
    ];
}

/**
 * Check if the mail was inserted
 * @param string
 */
function checkMail($mail) {
    if (isset($mail)) {
        return true;
}
}