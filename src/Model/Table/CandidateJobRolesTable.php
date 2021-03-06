<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CandidateJobRoles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Candidates
 * @property \Cake\ORM\Association\BelongsTo $JobRoles
 *
 * @method \App\Model\Entity\CandidateJobRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\CandidateJobRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CandidateJobRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CandidateJobRole|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CandidateJobRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CandidateJobRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CandidateJobRole findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CandidateJobRolesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('candidate_job_roles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Candidates', [
            'foreignKey' => 'candidate_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('JobRoles', [
            'foreignKey' => 'job_role_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['candidate_id'], 'Candidates'));
        $rules->add($rules->existsIn(['job_role_id'], 'JobRoles'));

        return $rules;
    }
}
