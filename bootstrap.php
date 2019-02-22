<?php

require 'vendor/autoload.php';
require 'functions.php';

$dotenv = \Dotenv\Dotenv::create(__DIR__)->load();

$constr = 'mysql:';
$constr .= 'host=' . env('DB_HOSTNAME') . ';';
$constr .= 'dbname=' . env('DB_DATABASE');

try {
    $db = new PDO($constr, env('DB_USERNAME'), env('DB_PASSWORD'));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

if (! empty($_GET['u'])) {
    try {
        $stmt = $db->prepare('
            INSERT INTO requests (year, month, day, time, organization, organization_group, client_ip, client_name, client_user, client_group, request_group, request_url) 
            VALUES (:year, :month, :day, :time, :organization, :organization_group, :client_ip, :client_name, :client_user, :client_group, :request_group, :request_url)
        ');
        $stmt->execute([
            ':year' => date('Y'),
            ':month' => date('m'),
            ':day' => date('d'),
            ':time' => date('H:i:s'),
            ':organization' => $_GET['org'],
            ':organization_group' => $_GET['grp'],
            ':client_ip' => $_GET['a'],
            ':client_name' => $_GET['n'],
            ':client_user' => $_GET['i'],
            ':client_group' => $_GET['s'],
            ':request_group' => $_GET['t'],
            ':request_url' => $_GET['u'],
        ]);
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

