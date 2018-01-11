<?php

namespace AgileElement;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Sucrose extends Model {

    const CREATED_AT = 'date_entered';

    const UPDATED_AT = 'date_modified';

    const DELETED_AT = 'deleted';

    public $incrementing = false;

    public function setDeletedAttribute()
    {
        if(DateTime::createFromFormat('Y-m-d H:i:s', $this->attribute['deleted']) !== false) {
            $this->attribute['deleted'] = 1;
        }
    }

    public function save(array $options = []) {
        if ( empty($this->id) ) {
            $this->id = Uuid::uuid1();
        }
        return (parent::save($options));
    }

}
