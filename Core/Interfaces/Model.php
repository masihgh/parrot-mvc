<?php

namespace Core\Interfaces;

use PDO;

/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class Model
{

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $dsn = 'mysql:host=' . $_SERVER['db_host'] . ';dbname=' . $_SERVER['db_name'] . ';charset='.$_SERVER['db_charset'];
            $db = new PDO($dsn, $_SERVER['db_username'], $_SERVER['db_password']);

            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }
}
