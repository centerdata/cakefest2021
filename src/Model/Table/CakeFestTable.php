<?php
declare(strict_types=1);

namespace CakeFest\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CakeFest Model
 *
 * @property \CakeFest\Model\Table\PhinxlogTable&\Cake\ORM\Association\BelongsToMany $Phinxlog
 *
 * @method \CakeFest\Model\Entity\CakeFest newEmptyEntity()
 * @method \CakeFest\Model\Entity\CakeFest newEntity(array $data, array $options = [])
 * @method \CakeFest\Model\Entity\CakeFest[] newEntities(array $data, array $options = [])
 * @method \CakeFest\Model\Entity\CakeFest get($primaryKey, $options = [])
 * @method \CakeFest\Model\Entity\CakeFest findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \CakeFest\Model\Entity\CakeFest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeFest\Model\Entity\CakeFest[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \CakeFest\Model\Entity\CakeFest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeFest\Model\Entity\CakeFest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeFest\Model\Entity\CakeFest[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \CakeFest\Model\Entity\CakeFest[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \CakeFest\Model\Entity\CakeFest[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \CakeFest\Model\Entity\CakeFest[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CakeFestTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cake_fest');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Phinxlog', [
            'foreignKey' => 'cake_fest_id',
            'targetForeignKey' => 'phinxlog_id',
            'joinTable' => 'cake_fest_phinxlog',
            'className' => 'CakeFest.Phinxlog',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('phrase')
            ->maxLength('phrase', 255)
            ->requirePresence('phrase', 'create')
            ->notEmptyString('phrase');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        return $validator;
    }
}
