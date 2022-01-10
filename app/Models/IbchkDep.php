<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbchkDep extends Model
{
    use HasFactory;
    protected $guarded=[];

    use HasFactory;

    public function ibchk(){

        return $this->hasOne('App\Models\Ibchk');
    }
}
