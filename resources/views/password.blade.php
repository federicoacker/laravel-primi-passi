@extends('layouts.app')
<?php 
$uppercase = false;
$numbers = false;
$symbols = false;

if (isset($_GET['uppercase']) && $_GET['uppercase'] == "on") {
    $uppercase = true;
}
if (isset($_GET['numbers']) && $_GET['numbers'] == "on") {
    $numbers = true;
}
if (isset($_GET['symbols']) && $_GET['symbols'] == "on") {
    $symbols = true;
}

function generatePassword($uppercase, $numbers, $symbols, $length)
{
    $uppercaseChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercaseChars = "abcdefghijklmnopqrstuvwxyz";
    $numberChars = "0123456789";
    $symbolChars = "@/-?!=,.:;";

    $password = "";
    $password_length = 0;

    do {
        $randomSelector = rand(0, 3);
        $randomChar = $lowercaseChars[rand(0, strlen($lowercaseChars) - 1)];
        if ($uppercase && $randomSelector == 1) {
            $randomChar = $uppercaseChars[rand(0, strlen($uppercaseChars) - 1)];
        } else if ($numbers && $randomSelector == 2) {
            $randomChar = $numberChars[rand(0, strlen($numberChars) - 1)];
        } else if ($symbols && $randomSelector == 3) {
            $randomChar = $symbolChars[rand(0, strlen($symbolChars) - 1)];
        }

        $password .= $randomChar;
        $password_length = strlen($password);

    } while ($password_length < $length);
    return $password;
}

$password = generatePassword($uppercase, $numbers, $symbols, $_GET['length']);
?>

@section('content')
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-md-6">
                <div class="card" data-bs-theme="dark">
                    <div class="card-header">
                        <h2 class="card-title text-center">La tua nuova password è:</h2>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p class="card-text text-center"><?php echo $password ?></p>
                        <a class="btn btn-danger" href="/">Return to index</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection