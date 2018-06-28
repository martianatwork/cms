<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableImplementer;

class UsersMeta extends Model implements AuditableImplementer
{
    use SoftDeletes;
    use Auditable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_meta';

    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
