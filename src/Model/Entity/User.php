<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'name' => true,
        'fbid' => true,
        'twitterid' => true,
        'linkedinid' => true,
        'products' => true,
    ];
}
