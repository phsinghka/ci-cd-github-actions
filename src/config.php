<?php
/**
 * Configuration settings for the LAMP stack application.
 *
 * @category Configuration
 * @package  LampStack
 * @author   Piyush Himmatsinghka <phsinghka@gmail.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @version  PHP 8.1
 * @link     http://phsinghka.dev
 */
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lamp_db';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

