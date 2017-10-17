<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $table='permission_role';
    protected $primarykey=['permissison_id','role_id'];
    protected $fillable=array('permission_id','role_id');
    public $timestamps=false;
}
