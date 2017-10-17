<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
	protected $table='role_user';
	protected $primarykey=['role_id','user_id'];
	protected $fillable=array('role_id','user_id');
	public $timestamps=false;
}
