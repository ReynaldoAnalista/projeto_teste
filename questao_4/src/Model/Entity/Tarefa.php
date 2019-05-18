<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tarefa Entity
 *
 * @property int $id
 * @property string $tarefa
 * @property int $prioridade
 * @property \Cake\I18n\FrozenDate $criado_em
 */
class Tarefa extends Entity
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
        'tarefa' => true,
        'prioridade' => true,
        'criado_em' => true
    ];

    protected function _getCriadoEm($criadoEm)
    {
        return $criadoEm->i18nFormat('dd/MM/YYYY');
    }

}
