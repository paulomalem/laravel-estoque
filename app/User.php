<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; 
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model {


    use Notifiable;
    
    protected $table = 'usuario';

    protected $primaryKey = 'id';
    protected $fillable = ['id', 'login', 'name', 'password'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
