<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phong extends Model
{
    protected $table = "tbl_phong";
	
	public function user()
	{
		return $this->hasMany('App\user','p_id','id');
	}

	public function phieu()
    {
    	return $this->hasManyThrough('App\phieu','App\user','p_id','u_id','id');
    }

    public $timestamps = false;
}
