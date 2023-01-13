<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        "first_name" => true,
        "lname" => true,
        "email" => true,
        "phone" => true,
        "password" => true,
        'created_at' => true,
        'updated_at' => true
    ];
}

?>