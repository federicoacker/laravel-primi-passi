<?php
namespace App;
class PasswordGenerator
{
    public bool $uppercase = false;
    public bool $numbers = false;
    public bool $symbols = false;
    public int $length = 0;
    public function __construct()
    {
        if (isset($_GET['length'])) {
            $this->length = $_GET['length'];
        }
        if (isset($_GET['uppercase']) && $_GET['uppercase'] == "on") {
            $this->uppercase = true;
        }
        if (isset($_GET['numbers']) && $_GET['numbers'] == "on") {
            $this->numbers = true;
        }
        if (isset($_GET['symbols']) && $_GET['symbols'] == "on") {
            $this->symbols = true;
        }
    }
    public function generatePassword()
    {
        $uppercaseChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lowercaseChars = "abcdefghijklmnopqrstuvwxyz";
        $numberChars = "0123456789";
        $symbolChars = "@/-?!=,.:;";

        $password = "";
        $password_length = 0;

        if ($this->length != 0) {
            do {
                $randomSelector = rand(0, 3);
                $randomChar = $lowercaseChars[rand(0, strlen($lowercaseChars) - 1)];
                if ($this->uppercase && $randomSelector == 1) {
                    $randomChar = $uppercaseChars[rand(0, strlen($uppercaseChars) - 1)];
                } else if ($this->numbers && $randomSelector == 2) {
                    $randomChar = $numberChars[rand(0, strlen($numberChars) - 1)];
                } else if ($this->symbols && $randomSelector == 3) {
                    $randomChar = $symbolChars[rand(0, strlen($symbolChars) - 1)];
                }

                $password .= $randomChar;
                $password_length = strlen($password);

            } while ($password_length < $this->length);
        }
        return $password;
    }
}


?>