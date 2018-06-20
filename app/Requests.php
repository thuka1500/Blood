<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{

	protected $fillable = ['user_id' , 'groups_id' , 'contents' , 'required_till'];

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function groups(){
		return $this->belongsTo('App\Groups');
	}
}
