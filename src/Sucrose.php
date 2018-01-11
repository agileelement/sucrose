<?php

namespace AgileElement;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Sucrose extends Model {

    const CREATED_AT = 'date_entered';

    const UPDATED_AT = 'date_modified';

    public $incrementing = false;

    public function save(array $options = []) {
        if ( empty($this->id) ) {
            $this->id = Uuid::uuid1();
        }
        parent::save($options);
    }

}
