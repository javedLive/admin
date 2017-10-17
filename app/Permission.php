<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Permission extends Model
{
    protected $table='permissions';
    protected $primaryKey='id';
    protected $guarded=array('id');

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
