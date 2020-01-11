<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PersonagensTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
     public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('Id_personagem')
           
            ->notEmpty('nome');

        return $validator;
    }
}