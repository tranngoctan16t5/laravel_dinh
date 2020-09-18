<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected  $table = 'roles';
    protected $fillable = [
        'name',
    ];

     public function users(){
        return $this->belongsToMany(User::class,'role_user','role_id','user_id')->withTimestamps();;
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class,'permission_role','role_id','permission_id')->withTimestamps();;
    }
}
