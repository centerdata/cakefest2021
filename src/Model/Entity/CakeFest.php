<?php
declare(strict_types=1);

namespace CakeFest\Model\Entity;

use Cake\ORM\Entity;

/**
 * CakeFest Entity
 *
 * @property int $id
 * @property string $phrase
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \CakeFest\Model\Entity\Phinxlog[] $phinxlog
 */
class CakeFest extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'phrase' => true,
        'created' => true,
        'modified' => true,
        'deleted' => true,
        'phinxlog' => true,
    ];
}
