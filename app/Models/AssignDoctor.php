<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignDoctor extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function doctor() {
        return $this->belongsTo(IbhDoctor::class,'doctor_id','id');

    }


    public function branch(){


        return $this->belongsTo(Branch::class,'branch_id', 'id');
    }

    public function department(){


        return $this->belongsTo(IbhDept::class,'dep_id', 'id');
    }

}
