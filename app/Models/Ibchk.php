<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibchk extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function ibchkdoctor(){


        return $this->belongsTo(IbchkDep::class,'ibchkdep_id', 'id');
    }
}
