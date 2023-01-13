<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\ORM\TableRegistry;
class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable("users");
    }
    // var $validate = array(
    //     'name' => '/^[a-zA-Z ]+$/'
    //   );
public function validationDefault(Validator $validator): Validator
{
$validator
->notEmptyString('first_name','name field add')
->add('first_name', 'validform', [
    'rule' => array('custom', '[a-zA-Z]'),
    'message' => 'Name must have a only string
    .0'])

->minLength('first_name', 5)
->maxLength('first_name', 10);
return $validator;
}
public function findAuth(Query $query, array $options)
{
    $query->where([
            'OR' => [ 
                'username' => $options['username'], 
                'email' => $options['username'] 
            ]], [], true); 
    return $query;
}
}

?>