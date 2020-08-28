<?php

// Start Sessions.
session_start();

// Require autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

// Attempt to load the .env file.
try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} catch(\Dotenv\Exception\InvalidPathException $e) {
    var_dump('Unable to load .env');
}

var_dump($_ENV['APP_NAME']);