<?php
// This line enables error reporting for debugging purposes.
// It sets the value of the `display_errors` and `display_startup_errors` directives to `1`,
// and sets the error reporting level to `E_ALL`, which includes all error types.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * This function connects to a MySQL database using the provided host, username, password, and database name.
 * If the connection is successful, it returns the database connection object.
 * If the connection fails, it returns `null`.
 *
 * @return object|null The database connection object if the connection is successful, `null` if the connection fails.
 */
function db()
{
    // Set the database connection parameters.
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'login';

    try {
        // Try to connect to the database using the `mysqli_connect` function.
        $db = mysqli_connect($host, $username, $password, $database);
        
        // If the connection is successful, return the database connection object.
        if ($db) {
            return $db;
        } else {
            return null;
        }
    } catch (Exception $ex) {
        // If an exception is caught, kill the script and display the error message.
        die($ex);
    }
}

// Call the `db` function to establish a database connection.
$db = db();
