<?php

namespace App\Models;
use Core\Interfaces\Model as Model;

use PDO;

/**
 * Example user model
 */
class User extends Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
