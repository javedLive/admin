<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $primaryKey='id';
    protected $guarded=array('id');


    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function assign(Permission $permissions)
    {
        return $this->permissions()->save($permissions);
    }
    public function hasPermission($permission)
    {
        if(is_string($permission))
        {
            return $this->permissions->contains('name',$permission);
        }
    }

/*    public function users()
    {
        return $this->belongsToMany('App\User', 'role_user', 'role_id', 'user_id');
    }           */

    public function users() {
       return $this->belongsTo('App\User');
   }
}
