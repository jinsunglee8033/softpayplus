<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    public $timestamps = false;

    protected $dateFormat = 'U';

    protected $primaryKey = 'code';

    public $incrementing = false;
}
