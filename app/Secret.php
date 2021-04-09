<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    protected $table = 'secrets';

    const CREATED_AT = 'createdAt';

}
