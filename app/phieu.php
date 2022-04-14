<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phieu extends Model
{
    protected $table = "tbl_phieu";

    public function User()
    {
        return $this->belongsTo('App\User','u_id','id');
    }
	
    public $timestamps = false;
}
