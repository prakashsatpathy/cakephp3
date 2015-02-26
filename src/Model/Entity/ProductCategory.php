<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductCategory Entity.
 */
class ProductCategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'product_id' => true,
        'category_id' => true,
        'product' => true,
        'category' => true,
    ];
}
