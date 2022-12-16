<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}
