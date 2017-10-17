<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    public function hasRole($role)
    {
        if(is_string($role))
        {

            return $this->roles->contains('role',$role);
        }
        return !! $role->intersect($this->roles)->count();
    }

    public function assign($role)
    {
        if(is_string($role))
        {
            $this->roles()->save(
                Role::whereName($role)->firstOrFail()
                );
        }
        return $this->roles()->save($role);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function hasPermission($permission)
    {
        if(is_string($permission))
        {
            return $this->permissions->contains('name',$permission);
        }
        return !! $permission->intersect($this->$permission)->count();

    }
    public function assignPermission($permission)
    {
        if(is_string($permission))
        {
            $this->roles()->save(
                Permission::whereName($permission)->firstOrFail()
                );
        }
        return $this->permissions()->save($permission);
    }


    public function UserhasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
